<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $serve=User::all();
        return view('website.profile', ['star'=> $serve]);
    }
    public function update(Request $request , $id)
    {
     //   dd($request->all());


        $user = User::find($id);
       
        if($request->hasFile('profilepic')){
            $path = public_path(). '/images/user_images';

            if (!file_exists($path) && !is_dir($path)) {
                File::makeDirectory($path,0777,true, true);
            }

            $image = $request->profilepic;
            $random=rand(1,1000000);
            $image_name = $image->getClientOriginalExtension();
            $image_name=$random.'.'.$image_name;
            $image_name = str_replace(' ', '_', $image_name);
            $upload=$image->move($path, $image_name);
            $user->image = $image_name;
        } else {
            $user->image = $request->old_image;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return redirect('/profile');
    }
    public function passedit($user=null)
    {
        if(empty($user)){
            $user = Auth::user()->id;
        }
        $user =User::find($user);
        return view('website.newpassword',compact('$user'));
    }

    public function passupdate(Request $request,$user=null)
    {  
        if(empty($user)){
            $user = Auth::user()->id;
        }

        $user = User::find($user);
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/profile');
    }
}
