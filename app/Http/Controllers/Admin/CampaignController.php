<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use DB;

class CampaignController extends Controller
{
    public function index($id)
    {
        $compId = decrypt($id);
        $serve=User::all();
        
        return view('siteadmin.website.campaign', ['star'=> $serve, 'compId'=>$compId]);
    }
}
