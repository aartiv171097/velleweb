<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Auth\Passwords\PasswordBroker;
use Illuminate\Http\Request;
use Mail;
use App\Mail\PasswordResetMail;
use Carbon\Carbon;
use DB;
use Hash;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('guest');
    }
    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }
    

    public function sendResetLinkEmail(Request $request){
        $this->validateEmail($request);

        $token = str_random(60);
        $email = $request->email;
        $url = url('/password/reset').'/'.$token.'/'.base64_encode(urlencode($email));
        $user = (object)['email'=> $email, 'token'=> $token, 'encoded_email'=>urlencode($email), 'url'=>$url];
        
        if($entry = DB::table('password_resets')->where('email', $email)->first()){
            DB::table('password_resets')->where('email', $email)->update(['token'=>$token, 'created_at' => Carbon::now()]);
        }else{
            DB::table('password_resets')->insert([
                'email' => $email,
                'token' => $token, 
                'created_at' => Carbon::now(),
            ]);
        }
        
        Mail::to($email)->send(new PasswordResetMail($user));

        return redirect()->back()->with(['status'=>"Email password link is sent on your mail. Please visit on you mail"]);
    }

    
}
