<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   public function showLoginForm()
    {
        return view('website.indexlogin');
    }
    public function handleLogin(Request $req)
    {
        $remember = $req->get('one');
        if(Auth::attempt(['email' => $req->email, 'password' => $req->password], $remember))
        {
            return redirect('/profile');
        }

        return back()->withInput()->with('message', 'Login Failed');
    }


    protected $redirectTo = '/profile'; 
    /**                                                       
     * Create a new controller instance.     
     *                                              
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/login');
    }
   
}

