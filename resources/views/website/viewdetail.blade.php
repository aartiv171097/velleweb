@extends('layouts.detailmain')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/material.css')}}">

@endsection
@section('content')
<div class="login-bg">
    <div class="container">
    <section class="col-md-12 pt-5 pb-0 mb-5">
      <p class="mt-5 text-center"><a href="{{ route('homes') }}" style="color: #fff !important; font-size:25px; font-weight:700; " >BrandCer</a></p>
        <div class="bg-white box-style" style="margin:50px;">                      		 
               <div class="row mb-5" style="padding:50px 50px 20px 50px">
                <form method="POST"  enctype="multipart/form-data">
                 @csrf
                
                 <div class="col-md-12"><p class="font-weight-bold f-15">General Details</p></div>
  
                        @if(Auth::guard('admin')->user())
                 
                        
                        <input type="hidden" name="id" value="{{ $user['id']}}">
                        <div class="col-md-6">
                            <div class="form-group profile-form">
                              <label class="font-semi-bold">Full Name</label>
                              <input type="text" class="form-control" readonly="readonly" name="name" id="name" value="{{ $user['id'] }}"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group profile-form">
                                  <label class="font-semi-bold">Brand Name</label>
                                  <input type="text" class="form-control" readonly="readonly" name="brand_name" id="brand_name" value="{{ $user['brand_name'] }}"/>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group profile-form">
                              <label class="font-semi-bold">Email</label>
                              <input type="text" class="form-control" readonly="readonly"  name="email" id="email" value="{{ $user['email'] }}"/>
                            </div>              
                        </div>
                        <div class="col-md-6">       
                            <div class="form-group profile-form">
                              <label class="font-semi-bold">Contact Number</label>
                              <input type="text" class="form-control" readonly="readonly"  name="phone" id="phone" value="{{ $user['phone'] }}"/>
                            </div>
                        </div>
                            @endif
                            <div class="col-md-6">
                            <div class="form-group profile-form">
                              <label class="font-semi-bold">Messages</label>
                              <input  type="text" class="form-control" readonly="readonly"  name="message" id="message" value="{{ $user['message'] }}"/>

                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group profile-form">
                                <label class="font-semi-bold">Location</label>
                                <input type="text" class="form-control" readonly="readonly"  name="location" id="location" value="{{ $user['location'] }}"/>
  
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group profile-form">
                                  <label class="font-semi-bold">Category Name</label>
                                  <input type="text" class="form-control" readonly="readonly"  name="category_name" id="category_name" value="{{ $user['category_name'] }}"/>
    
                                </div>
                            </div>
                             @if(Auth::guard('admin')->user())
                            <div class="col-md-6">
                                <div class="form-group profile-form">
                                    <div class="bg-white box-style p-2 mt-4" style="border-radius:8px">
                                         <select class="form-control social-input" style="width:100%" name="promote" id="promote">
                                          <option {{  $user->promote == "Male" ? 'selected' : '' }} value="Male" >Male</option>
                                          <option {{  $user->promote == "Female" ? 'selected' : '' }} value="Female">Female</option>
                                          <option {{  $user->promote == "Both" ? 'selected' : '' }} value="Both">Both</option></select>
                                         <div class="clearfix"></div>
                                    </div>                                  
                                </div>                     
                            </div>
                            @endif
                            <div class="clearfix"></div>
                            <div class="col-md-6">
                            <div class="form-group profile-form">
                              <label class="font-semi-bold">Upload Brand Logo</label><br><br>
                              <img style="width:120px;" src="{{ asset('/images/detail_images'.'/'.$user['brand_logo'])}}"   name="brand_logo" id="brand_logo" />
                              <a href="{{ asset('/images/detail_images'.'/'.$user['brand_logo'])}}" download class="btn btn-primary" >Download</a>

                            </div>
                            </div>
                      
                   
                    <div class="col-md-12 mt-5"><p class="font-weight-bold f-15">Campaign Details For Instagram Story</p></div>
                            <div class="col-md-12">
                                <div class="form-group profile-form">
                                  <label class="font-semi-bold">Upload Images/Video</label><br><br>
                                  
                                </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="form-group profile-form mb-1" style="display:flex; flex-direction: column; align-items: center; justify-content:center;">
                                  <img style="width:120px;" src="{{ asset('/images/detail_images'.'/'.$user['image_videos_story'])}}"   name="image_videos_story" id="image_videos_story" />
                                  <a style="margin:0;margin-top:20px;" href="{{ asset('/images/detail_images'.'/'.$user['image_videos_story'])}}" download class="btn btn-primary" >Download</a>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="form-group profile-form mb-1"style="display:flex; flex-direction: column; align-items: center; justify-content:center;">
                                  <img style="width:120px;" src="{{ asset('/images/detail_images'.'/'.$user['image_videos_story'])}}"   name="image_videos_story" id="image_videos_story" />
                                  <a style="margin:0;margin-top:20px;" href="{{ asset('/images/detail_images'.'/'.$user['image_videos_story'])}}" download class="btn btn-primary" >Download</a>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="form-group profile-form mb-1" style="display:flex; flex-direction: column; align-items: center; justify-content:center;">
                                  <img style="width:120px;" src="{{ asset('/images/detail_images'.'/'.$user['image_videos_story'])}}"   name="image_videos_story" id="image_videos_story" />
                                  <a style="margin:0;margin-top:20px;" href="{{ asset('/images/detail_images'.'/'.$user['image_videos_story'])}}" download class="btn btn-primary" >Download</a>
                                  </div>
                              </div>

                                
                                <div class="col-md-6">
                                    <div class="form-group profile-form">
                                      <label class="font-semi-bold">Hashtag</label>
                                      <input type="text" class="form-control" readonly="readonly"  name="hashtag_story" id="hashtag_story" value="{{ $user['hashtag_story'] }}"/>

                                    </div>               
                                </div>
                                <div class="col-md-6">    
                                <div class="form-group profile-form">
                                  <label class="font-semi-bold">Instagram Handle</label>
                                  <input type="text" class="form-control" readonly="readonly"  name="instagram_handle_story" id="instagram_handle_story" value="{{ $user['instagram_handle_story'] }}"/>

                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group profile-form">
                                  <label class="font-semi-bold">Q & A Topic</label>
                                  <input type="text" class="form-control" readonly="readonly"  name="QA_topic" id="QA_topic" value="{{ $user['QA_topic'] }}"/>

                                </div>
                                </div>
                          
                         
                        <div class="col-md-12 mt-5"><p class="font-weight-bold f-15">Campaign Details For Instagram Post</p></div>
                            <div class="col-md-12">
                                <div class="form-group profile-form">
                                  <label class="font-semi-bold">Upload Images/Video</label><br><br>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group profile-form mb-1" style="display:flex; flex-direction: column; align-items: center; justify-content:center;">
                                  <img style="width:120px;" src="{{ asset('/images/detail_images'.'/'.$user['image_videos_post'])}}"   name="image_videos_post" id="image_videos_post" />
                                  <a style="margin:0;margin-top:20px;" href="{{ asset('/images/detail_images'.'/'.$user['image_videos_post'])}}" download class="btn btn-primary">Download</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group profile-form mb-1" style="display:flex; flex-direction: column; align-items: center; justify-content:center;">
                                  <img style="width:120px;" src="{{ asset('/images/detail_images'.'/'.$user['image_videos_post'])}}"   name="image_videos_post" id="image_videos_post" />
                                  <a style="margin:0;margin-top:20px;" href="{{ asset('/images/detail_images'.'/'.$user['image_videos_post'])}}" download class="btn btn-primary">Download</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group profile-form mb-1" style="display:flex; flex-direction: column; align-items: center; justify-content:center;">
                                  <img style="width:120px;" src="{{ asset('/images/detail_images'.'/'.$user['image_videos_post'])}}"   name="image_videos_post" id="image_videos_post" />
                                  <a style="margin:0;margin-top:20px;" href="{{ asset('/images/detail_images'.'/'.$user['image_videos_post'])}}" download class="btn btn-primary">Download</a>
                                </div>
                            </div>

                                <div class="col-md-6">
                                    <div class="form-group profile-form">
                                      <label class="font-semi-bold">Caption for Post</label>
                                      <input type="text" class="form-control" readonly="readonly"  name="caption_for_post" id="caption_for_post" value="{{ $user['caption_for_post'] }}"/>

                                    </div>                
                                </div>
                                <div class="col-md-6">   
                                <div class="form-group profile-form">
                                  <label class="font-semi-bold">Instagram Handle</label>
                                  <input type="text" class="form-control" readonly="readonly"  name="instagram_handle_post" id="instagram_handle_post" value="{{ $user['instagram_handle_post'] }}"/>

                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group profile-form">
                                        <label class="font-semi-bold">Hashtag</label>
                                        <input type="text" class="form-control" readonly="readonly"  name="hashtag_post" id="hashtag_post" value="{{ $user['hashtag_post'] }}"/>

                                      </div> 
                                </div>
                                

                </form>
             </div>
         </div>
      </section>
  </div>
            
</div>
  <div id="share-barcode" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content box-shadow-none">
        <div class="modal-header no-border">
          <button type="button" class="close" data-dismiss="modal"><img src="{{ asset('asset/img/close-pop.png')}}" /></button>
        </div>
        <div class="modal-body text-center">
          <p class="pop-barcode no-margin"><img src="{{ asset('asset/img/pop-barcaode.jpg') }}" /></p>
            <h3 class="text-white">Share On</h3>
          <ul class="social-barcode no-padding">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          </ul>
          <div class="col-md-8 col-md-offset-2"><input type="text" class="form-control" style="background: none; color: #fff; ont-size: 13px" value="https://www.instagram.com/?hl=en" /></div>
          <br><br>
            <h5 class="text-white"><a href="#">Copy the Link</a></h5>
        </div>
      </div>
  
    </div>
  </div>
@endsection   
      
@section('js')
<script>
  $(document).ready(function(){

    $("#ImageWrapper").on('click', function(){
      $('#Image').trigger('click');
    });
   
  });
</script>
@endsection