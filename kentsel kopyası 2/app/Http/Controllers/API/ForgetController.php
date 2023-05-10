<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ForgetRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Mail\ForgetMail;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ForgetController extends Controller
{
    public function ForgetPassword(ForgetRequest $request)
    {
        $email = $request->email;
        
        if (User::where('email', $email)->doesntExist()) {
         
            return response([
                "message" => "Email invalid"
            ], 401);
        }
        $token = rand(10, 999999);


        try
        {
            DB::table('password_reset_tokens')->insert([
                'email' => $email,
                'token' => $token,
                'created_at' => now()
            ]);

            //Mail send to users
            Mail::to($email)->send(new ForgetMail($token));

            return response([
                "message" => "Mail sent",
                "token" => $token,
            ], 200);
        }
        catch(Exception $exception)
        {
                return response([
                    "message" => $exception->getMessage()
                ], 400);
        }
    }

    public function resetPassword(Request $request , $token)
    {
        $token = $request->query('token');

        if (!$request->email) {
            abort(404);
        }

        return response([
            "message" => "Token is valid",
            'email' => $request->email, 
            'token' => $token,
        ], 200);
       /*  return view('reset_password', ['email' => $request->email, 'token' => $token]); */
    }
    
    public function updatePassword(UpdatePasswordRequest $request)
    {
        $email = $request->email;
        $token = $request->token;
        $password = $request->password;

        DB::table('password_reset_tokens')->where('token', $token)->delete();
        User::where('email', $email)->update(['password' => Hash::make($password)]);

        return response([
            "message" => "Password updated successfully"
        ], 200);
    }
}
