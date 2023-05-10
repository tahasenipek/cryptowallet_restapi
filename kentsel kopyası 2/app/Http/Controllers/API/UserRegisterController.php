<?php
//app/Http/Controllers/API/RegisterController.php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
    
class UserRegisterController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'phonenumber' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:6',
            'c_password' => 'required|same:password',
            'binareferansno' => 'nullable',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation error.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $input = $request->all();
            $input['password'] = bcrypt($input['password']);
            $input['c_password'] = bcrypt($input['c_password']);
            $user = User::create($input);
/*             $success['token'] =  $user->createToken('MyApp')->accessToken;
            $success['name'] =  $user->name; */
            return redirect('/');
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Kayıt işlemi sırasında bir hata oluştu',
                'error' => $e->getMessage()
            ], 401);
        }
        /* return $this->sendResponse($success, 'User register successfully.'); */
    }

    public function binagiris(Request $request)
    {
        $user = User::find($request->user_id);
        $success['token'] =  $request->access_token;
        $success['name'] =  $user->name;
        
        // Check if binareferansno is 0
        if ($user->binareferansno == 0) {
            Session::put('user_id', $user->id);
            Session::put('access_token', $success['token']);
            return redirect()->route('binaekle');
        } else {
            return view('dashboard', ['user' => $user, 'access_token' => $success['token']]);
        }
    }
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $user_id = $user->id;
            $success['token'] =  $user->createToken('binasakini')->accessToken; 
            $success['name'] =  $user->name;
            $request->session()->put('token', $success['token']);
            $request->session()->put('user_id', $user_id);
            return redirect()->route('binagiris', ['user_id' => $user->id]);
        }
        else {
            return redirect('/binasakingiris')->with('error', 'Email veya şifre hatalı.');
        }
    }

    public function showProfile()
    {
        return view('profile', ['user' => Auth::user()]);
    }

    public function logoutUser(Request $request)
    {
        if (Auth::check()) {
            $request->user()->tokens()->delete();
        }

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}