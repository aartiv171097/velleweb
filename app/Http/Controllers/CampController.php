<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\AssignCampaign;
use App\Campaign;

class CampController extends Controller
{
   public function index(){
      return view('website.campaign');
   }
    
}
