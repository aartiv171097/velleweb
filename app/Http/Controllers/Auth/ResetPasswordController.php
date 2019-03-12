<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Mail;
use App\Mail\PasswordResetMail;
use Carbon\Carbon;
use DB;
use Illuminate\Foundation\Auth\RedirectsUsers;
use App\User;
use Hash;
use Session;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/homes';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showResetForm(Request $request,$token, $email){
        $email = urldecode(base64_decode($email));
        
        return view('auth.passwords.reset')->with(
            ['token' => $token, 'email' => $email]
        );
    }
    public function reset(Request $request){
        $request->validate($this->rules(), $this->validationErrorMessages());

        if($entry = DB::table('password_resets')->where('token', $request->token)->first()){
            $startTime = Carbon::parse($entry->created_at);
            $finishTime = Carbon::now();
            $totalDuration = $finishTime->diffInSeconds($startTime);
            if($totalDuration < 3600){
                $user = User::where('email', $request->email)->first();
                $user->password = Hash::make($request->password);
                $user->save();
                DB::table('password_resets')->where('token', $request->token)->delete();
                Session::put('verify', "Password Successfully Reset");
                return redirect('/login');
            }else{
                return redirect()->back()->with('expired', 'Token Has been Expired');    
            }
        }else{
            return redirect()->back()->with('expired', 'Token Has been Expired');
        }

    }
}
