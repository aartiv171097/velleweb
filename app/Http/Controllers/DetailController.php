<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Campaign;
use Illuminate\Http\Request;
use DB;

class DetailController extends Controller
{
    public function index()
    {
        $serve=Campaign::all();
        return view('website.userdetail', ['star'=> $serve]);
    }
    public function store(Request $request)
    {
      
         $user = new Campaign;
        $user->name = $request->name;
        $user->brand_name = $request->brand_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->location = $request->location;
        $user->category_name = $request->category_name;
        $user->message = $request->message;
        $user->brand_logo = $request->brand_logo;
        if($request->hasFile('brand_logo')){

            $path = public_path(). '/images/detail_images';

            if (!file_exists($path) && !is_dir($path)) {
                File::makeDirectory($path,0777,true, true);
            }

            $image = $request->brand_logo;

            $random=rand(1,1000000);

            $image_name = $image->getClientOriginalExtension();

            $image_name=$random.'.'.$image_name;

            $image_name = str_replace(' ', '_', $image_name);

            $upload=$image->move($path, $image_name);

            $user->brand_logo = $image_name;
        }
        $user->image_videos_story = $request->image_videos_story;
        if($request->hasFile('image_videos_story')){

            $path = public_path(). '/images/detail_images';

            if (!file_exists($path) && !is_dir($path)) {
                File::makeDirectory($path,0777,true, true);
            }

            $image = $request->image_videos_story;

            $random=rand(1,1000000);

            $image_name = $image->getClientOriginalExtension();

            $image_name=$random.'.'.$image_name;

            $image_name = str_replace(' ', '_', $image_name);

            $upload=$image->move($path, $image_name);

            $user->image_videos_story = $image_name;
        }
        $user->hashtag_story = $request->hashtag_story;
        $user->instagram_handle_story = $request->instagram_handle_story;
        $user->QA_topic = $request->QA_topic;
        $user->image_videos_post = $request->image_videos_post;
        if($request->hasFile('image_videos_post')){

            $path = public_path(). '/images/detail_images';

            if (!file_exists($path) && !is_dir($path)) {
                File::makeDirectory($path,0777,true, true);
            }

            $image = $request->image_videos_post;

            $random=rand(1,1000000);

            $image_name = $image->getClientOriginalExtension();

            $image_name=$random.'.'.$image_name;

            $image_name = str_replace(' ', '_', $image_name);

            $upload=$image->move($path, $image_name);

            $user->image_videos_post = $image_name;
        }
        $user->caption_for_post = $request->caption_for_post;
        $user->hashtag_post = $request->hashtag_post;
        $user->instagram_handle_post = $request->instagram_handle_post;
        $user->save();
        return redirect('/thank');
    }
    public function show($id)
    {
        $user = Campaign::find($id);
        return view('website.viewdetail', ['user'=> $user]);
    }
}
