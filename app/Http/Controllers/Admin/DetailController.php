<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Campaign;
use Illuminate\Http\Request;
use DB;

class DetailController extends Controller
{
    public function index()
    {
        $serve=Campaign::orderBy('id', 'desc')->get();
        return view('siteadmin.website.detailsreq', ['detail'=> $serve]);
    }
    public function show($id)
    {
        $user = Campaign::find($id);
        return view('website.viewdetail', ['user'=> $user]);
    }
    
}
