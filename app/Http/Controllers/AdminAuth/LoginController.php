<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Admin;

class LoginController extends Controller
{
    use AuthenticatesUsers;

     public $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('admin.guest', ['except' => 'logout']);
    }

    public function showLoginForm()
    {
        return view('siteadmin.auth.login');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }


    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

    public function logoutToPath() {
        return '/siteadmin/login';
    }

    protected function authenticated(Request $request, $user)
    {
        
    }

    protected function loggedOut(Request $request)
    {
        return redirect()->route('admin.login');
    }
   
}
