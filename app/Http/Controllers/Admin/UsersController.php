<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Http\Request;
use DB;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $serve=User::all();
        return view('siteadmin.website.users', ['star'=> $serve]);
    }
}
