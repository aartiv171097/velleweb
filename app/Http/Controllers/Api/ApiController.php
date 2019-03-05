<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AssignCampaign;
use App\Campaign;
use App\User;

class ApiController extends Controller
{
    public function AddCampaign(Request $request)
    {
        try{
            if(!empty($request->user_id && $request->campaign_id)){
                if($assigned = AssignCampaign::where('campaign_id', $request->campaign_id)->where('user_id', $request->user_id)->first()){
                    $assigned->delete();
                }else{
                    $assigned = new AssignCampaign($request->all());
                    $assigned->save();
                }
                return response()->json(['status'=>200, 'message'=> 'success', 'data'=>$request->all()]);
            } else{
                return response()->json(['status'=>400, 'message'=> 'params missing']);
            }
        } catch(\Exception $e) {
            return response()->json(['status'=> 500, 'message'=>$e->getMessage()]);
        }
    }     
    public function ChangeStatusUser(Request $request)
    {
        try{
            if(!empty($request->user_id)){
                $user_id = $request->user_id;
                $user = User::find($user_id);
                if($user->status==0)
                {
                    $user->status = 1; 
                }
               
                else
                {
                    $user->status = 0;
                }
                $user->save();

                return response()->json(['status'=>200, 'message'=> 'success', 'data'=>$request->all()]);
            } else{
                return response()->json(['status'=>400, 'message'=> 'params missing']);
            }
        } catch(\Exception $e) {
            return response()->json(['status'=> 500, 'message'=>$e->getMessage()]);
        }
    }     
    public function ChangeStatusCampaign(Request $request)
    {
        try{
            if(!empty($request->camp_id)){
                $camp_id = $request->camp_id;
                $camp = Campaign::find($camp_id);
                if($camp->status==0)
                {
                    $camp->status = 1; 
                }
               
                else
                {
                    $camp->status = 0;
                }
                $camp->save();

                return response()->json(['status'=>200, 'message'=> 'success', 'data'=>$request->all()]);
            } else{
                return response()->json(['status'=>400, 'message'=> 'params missing']);
            }
        } catch(\Exception $e) {
            return response()->json(['status'=> 500, 'message'=>$e->getMessage()]);
        }
    }     
}



