<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\AssignCampaign;
use App\Campaign;
use Auth;

class CampController extends Controller
{
   public function index(){
      if(empty(Auth::user()->aips))
      {
      return view('website.campsocial');
      }
      else
      {
         return view('website.campaign');
      }
   }
}
