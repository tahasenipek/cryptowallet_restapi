<?php
//app/Http/Controllers/API/RegisterController.php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
    
class RegisterController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'surname' => 'required',
            'phonenumber' => 'required|unique:users,phonenumber',
            'country' => 'required',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation error.',
                'errors' => $validator->errors()
            ], 422);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['c_password'] = bcrypt($input['c_password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;
        return response()->json([
            'status' => 'success',
            'message' => 'User registered successfully.',
            'user_id' => $user->id,
            'access_token' => $success['token'],
        ], 201);
        /* return $this->sendResponse($success, 'User register successfully.'); */
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
            $success['token'] =  $user->createToken('MyApp')->accessToken; 
            $success['name'] =  $user->name;
            
            return response()->json([
                'status' => 'success',
                'message' => 'User login successfully.',
                'user_id' => $user->id,
                'access_token' => $success['token'],
            ], 201);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid email or password',
                'errors' => [
                    'email' => 'Invalid email or password'
                ]
            ], 401);
        }
    }

    public function destroy(Request $request)
    {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return response()->json([
                'status' => 'success',
                'message' => 'User logged out successfully'
            ]);
    }
}