<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Firma;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Laravel\Passport\Token;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Support\Facades\DB;




class FirmaController extends Controller
{
    public function register(Request $request)
{
    $validator = Validator::make($request->all(), [
        'firmaismi' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:firma',
        'yetkiliadsoyad' => 'required|string|max:255',
        'yetkilitel' => 'required',
        'password' => 'required|min:6|',
        'c_password' => 'required|same:password',
        'referansno' => 'nullable',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'message' => 'Validation failed',
            'errors' => $validator->errors()
        ], 401);
    }

    try {
        $firma = new Firma([
            'firmaismi' => $request->firmaismi,
            'email' => $request->email,
            'yetkiliadsoyad' => $request->yetkiliadsoyad,
            'yetkilitel' => $request->yetkilitel,
            'password' => bcrypt($request->password),
            'c_password' => bcrypt($request->c_password),
            'referansno' => $request->referansno,
        ]);
        $firma->save();
        return redirect('/firma/girisekrani');

    } catch (\Exception $e) {
        return response()->json([
            'message' => 'Kayıt işlemi sırasında bir hata oluştu',
            'error' => $e->getMessage()
        ], 401);
    }
}


    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */

        public function login(Request $request)
        {
            $firma = Firma::where('email', $request->email)->first();

            if ($firma && Hash::check($request->password, $firma->password)) {
                Auth::login($firma);
                $success['token'] =  $firma->createToken('firmakullanıcı')->accessToken; 
                $success['name'] =  $firma->name;
                $request->session()->put('firma_token', $success['token']);
                return redirect()->route('firmagirisekrani')->with('success', 'Başarıyla giriş yaptınız!');
            } else {
                return back()->withErrors('Hatalı kullanıcı adı veya şifre girdiniz.');
            }
        }
    
    public function getfirmagirisekrani()
    {
        if (session()->has('firma_token')) {
            return view('firmagirisekrani');
        }
    }

    public function firmagirisekrani(Request $request)
    {
        // Kullanıcının girdiği bilgileri alalım
        $email = $request->input('email');
        $password = $request->input('password');

        // Firma tablosundan kullanıcıyı email adresine göre sorgulayalım
        $firma = Firma::where('email', $email)->first();

        // Eğer kullanıcı varsa ve şifresi doğruysa
        if ($firma && Hash::check($password, $firma->password )) {

            // Firma token'ını oluşturup session'da saklayalım
            $token = $firma->createToken('firma_token')->accessToken;
            $firma_id = $firma->firma_id;
            /* session(['firma_token' => $token]); */
            $request->session()->put('firma_token', $token);
            $request->session()->put('firma_id', $firma_id);
            // Firma giriş ekranına yönlendirelim
            return redirect()->route('firmagirisekrani');
        } 
        else 
        {
            // Kullanıcı yok veya şifre yanlışsa, hata mesajı gösterelim
            return back()->withErrors('Hatalı kullanıcı adı veya şifre girdiniz.');
        }
    }





    public function destroy(Request $request)
    {
        // Firma kullanıcısını oturumdan çıkaralım
        if ($request->session()->has('firma_token')) {
            // Firmanın token'ını alalım
            $token = $request->session()->get('firma_token');
            $firma_id = $request->session()->get('firma_id');
            
            DB::table('oauth_access_tokens')->where('user_id', $firma_id)->where('name', 'firma_token')->delete();
            // Firmanın token'ını bulalım ve silme işlemini gerçekleştirelim
            $accessToken = PersonalAccessToken::where('token', $token)->first();
            if ($accessToken) {
                $accessToken->delete();
            }
            $request->session()->forget('firma_token');
            // Firma oturumunu sonlandıralım
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        } 
        else {
            // Diğer kullanıcılar için oturumu sonlandıralım
            Auth::logout();
            return redirect('/');
        }
    }
}
