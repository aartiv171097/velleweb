<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use DB;

class SocialinfoController extends Controller
{
      
    public function edit()
    {
        $user = Auth::user();
        return view('website.socialinfo',compact('user'));
    }
        public function update(Request $request,$id)
        {  
            $user = user::find($id);
            $user->link         = $request->link;
            $user->aips          = $request->aips;
            $user->aipp          = $request->aipp;
            $user->category      = $request->category;
           
            $user->save();
            return redirect()->route('profile');
        }
      
       
   
}
