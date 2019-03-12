<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use File;

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
       
        if(!empty($picture=$request->profilepic)){
            
            $data = base64_decode(explode( ',', $picture)[1]);
            $path = public_path().'/images/user_images';
            
            if (!file_exists($path) && !is_dir($path)) {
                mkdir($path);
            }

            $image_name=uniqid().'.jpg';
            $file=$path.'/'.$image_name;
          //  dd(file_put_contents($file, $data));
            
            if(!file_put_contents($file, $data)) {
                return response()->json(['message'=>'image not upload','status'=>503]);
            }
            $user->image = $image_name;
            
        }else {
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
       

        $user = User::find(Auth::user()->id);

        //dd($user);
        // dd($user);
        // dd($user->makeVisible('password')->toArray());
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/profile');
    }
}
