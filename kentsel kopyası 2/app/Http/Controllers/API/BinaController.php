<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bina;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BinaController extends Controller
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function register(Request $request)
    {   
        if ($request->hasFile('resim')) {
            if ($request->hasFile('resim')) {
                $file = $request->file('resim');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads'), $filename);
                $filepath = 'uploads/' . $filename;
            }
        }
        else {
            $filepath = null;
        }

        $validator = Validator::make($request->all(), [
            'il' => 'required',
            'ilce' => 'required',
            'mahalle' => 'required',
            'sokak' => 'required',
            'binaismi' => 'required',
            'binano' => 'required',
            'kapino' => 'required',
            'binaislemi' => 'required',
            'binayasi' => 'required',
            'binadurumu' => 'required',
            'oylamaorani' => 'required',
            'yetkiliismi' => 'required',
        ]);
        

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 401);
        }
        try {

            if ($file->isValid()) {
            
            } 
            else {
                print_r($file->getErrorMessage());
                // Dosya geçerli değil, hata mesajını gösterin veya işlemi durdurun.
            }
            
                $binaReferansNo = substr(date('His'), -3) . '-' . rand(100, 999) . '-' . rand(100, 999);
                Session::put('binareferansno', $binaReferansNo);
                $bina = new Bina([
                    'resim' => $filepath,
                    'il' => $request->input('il'),
                    'ilce' => $request->input('ilce'),
                    'mahalle' => $request->input('mahalle'),
                    'sokak' => $request->input('sokak'),
                    'binaismi' => $request->input('binaismi'),
                    'binano' => $request->input('binano'),
                    'kapino' => $request->input('kapino'),
                    'binaislemi' => $request->input('binaislemi'),
                    'binayasi' => $request->input('binayasi'),
                    'binadurumu' => $request->input('binadurumu'),
                    'oylamaorani' => $request->input('oylamaorani'),
                    'yetkiliismi' => $request->input('yetkiliismi'),
                    'binareferansno' => $binaReferansNo,
                ]);
                $bina->save();
                
                return redirect()->route('bina.store');
                
            } 
            catch (\Exception $e) {
                return response()->json([
                'message' => 'Kayıt işlemi sırasında bir hata oluştu',
                'error' => $e->getMessage()
            ], 401);
        }
    }
    public function store(Request $request)
    {
        // Kullanıcı kaydetme işlemleri...

        $binareferansno = Session::get('binareferansno');
        $userId = Session::get('user_id');
        $user = User::find($userId);
        $user->binareferansno = $binareferansno;
        $user->save();
        // Bina kaydetme işlemleri...

        return redirect('/binagirisekrani')->with('success', 'Bina kaydınız başarıyla tamamlandı.');
    }

    public function joinBuilding(Request $request)
    {
        $binaKodu = $request->input('bina-kodu');
        $userId = Session::get('user_id');
        $user = User::find($userId);
        $user->binareferansno = $binaKodu;
        $user->save();

        // İstenilen işlemleri gerçekleştirin (ör. yönlendirme)

        
    }
}
