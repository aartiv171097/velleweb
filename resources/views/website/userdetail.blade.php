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
             <form method="POST" action="{{ route('userdetail.store') }}" enctype="multipart/form-data">
              @csrf
             <div class="col-md-12"><p class="font-weight-bold f-15">General Details</p></div>
              <div class="col-md-6">
                  <div class="form-group profile-form">
                      <label>Full Name</label>
                      <input type="text" class="form-control" placeholder="Enter your full name" name="name" value="" required>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group profile-form">
                      <label>Brand Name</label>
                      <input type="text" class="form-control" placeholder="Enter your brand name" name="brand_name" value="" required>                                        
                  </div>                     
              </div>
              <div class="col-md-6">
                  <div class="form-group profile-form">
                      <label>Email ID</label>
                      <input type="email" class="form-control" placeholder="Enter your email ID" name="email" value="" required>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group profile-form">
                      <label>Contact No</label>
                      <input type="text" class="form-control" placeholder="Enter your contact no" name="phone" value="" required>                                        
                  </div>                     
              </div>
              <div class="col-md-6">
                  <div class="form-group profile-form">
                      <label>Message that you want to communicate</label>
                      <input type="text" class="form-control" placeholder="Enter your message that you want to communicate" name="message" value="" required>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group profile-form">
                      <label>Location</label>
                      <input type="text" class="form-control" placeholder="Enter your location" name="location" value="" required>                                        
                  </div>                     
              </div>
              <div class="col-md-6">
                  <div class="form-group profile-form">
                      <label>Category Name</label>
                      <input type="text" class="form-control" placeholder="Enter your category name" name="category_name" value="" required>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group profile-form">
                      <div class="bg-white box-style p-2 mt-4" style="border-radius:8px">
                           <select class="form-control social-input" style="width:100%" name="promote" required>
                           <option value="">Who can Promote</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Both">Both</option>
                            </select>
                           <div class="clearfix"></div>
                      </div>                                  
                  </div>                     
              </div>
              <div class="col-md-6">
                  <div class="form-group profile-form">
                      <label class="font-semi-bold">Upload Brand Logo</label>
                      <div class="bg-white box-style p-2 mt-4" style="border-radius:8px">
                       
                           <input type="file" class="form-control social-input f-12" name="brand_logo" value="Upload Brand Logo"  required> 
                           <span class="f-13 pull-right mr-3" style="margin-top:7px"><i class="fa fa-paperclip"></i></span>
                           <div class="clearfix"></div>
                      </div>                                  
                  </div>                     
              </div>
                
              <div class="col-md-12 mt-5"><p class="font-weight-bold f-15">Campaign Details For Instagram Story</p></div>
              
              <div class="col-md-12">
                  <div class="profile-form mb-0">
                      <label class="font-semi-bold">Upload Images/Video</label>
                  </div>
              </div>
              
              <div class="col-md-4">
                  <div class="form-group profile-form mb-1">
                      <div class="bg-white box-style p-2 mt-4" style="border-radius:8px">
                           <input type="file" class="form-control social-input f-12" name="image_videos_story" value="Upload Brand Logo"  required> <span class="f-13 pull-right mr-3" style="margin-top:7px"><i class="fa fa-paperclip"></i></span>
                           <div class="clearfix"></div>
                      </div>                                  
                  </div>                     
              </div>
              
              <div class="col-md-4">
                  <div class="form-group profile-form mb-1">
                      <div class="bg-white box-style p-2 mt-4" style="border-radius:8px">
                           <input type="file" class="form-control social-input f-12" name="image_videos_story" value="Upload Brand Logo"  required> <span class="f-13 pull-right mr-3" style="margin-top:7px"><i class="fa fa-paperclip"></i></span>
                           <div class="clearfix"></div>
                      </div>                                  
                  </div>                     
              </div>
              
              <div class="col-md-4">
                  <div class="form-group profile-form mb-1">
                      <div class="bg-white box-style p-2 mt-4" style="border-radius:8px">
                           <input type="file" class="form-control social-input f-12" name="image_videos_story" value="Upload Brand Logo"  required> <span class="f-13 pull-right mr-3" style="margin-top:7px"><i class="fa fa-paperclip"></i></span>
                           <div class="clearfix"></div>
                      </div>                                  
                  </div>                     
              </div>
              
              <div class="col-md-12">
                  <div class="form-group profile-form">
                      <label class="font-semi-bold">total Maximum 3. Recommended size for images and videos is  1080*1920px. And length of video is maximum 20s</label>
                  </div>
              </div>
              
              <div class="col-md-6">
                  <div class="form-group profile-form">
                      <label>Hashtag</label>
                      <input type="text" class="form-control" placeholder="# Enter your hashtag" name="hashtag_story"  required>
                  </div>
              </div>
              
              <div class="col-md-6">
                  <div class="form-group profile-form">
                      <label>Instagram handle</label>
                      <input type="text" class="form-control" placeholder="Enter your instagram handle" name="instagram_handle_story" value="" required>
                  </div>
              </div>
              
              <div class="col-md-6">
                  <div class="form-group profile-form">
                      <label>Q & A Topic </label>
                      <input type="text" class="form-control" placeholder="Enter your Q & A topic " name="QA_topic" value="" required>
                  </div>
              </div>
              
              
              
              
              <div class="col-md-12 mt-5"><p class="font-weight-bold f-15">Campaign Details For Instagram Post</p></div>
              
              <div class="col-md-12">
                  <div class="profile-form mb-0">
                      <label class="font-semi-bold">Upload Images/Video</label>
                  </div>
              </div>
              
              <div class="col-md-4">
                  <div class="form-group profile-form mb-1">
                      <div class="bg-white box-style p-2 mt-4" style="border-radius:8px">
                           <input type="file" class="form-control social-input f-12" name="image_videos_post" value="Upload Brand Logo"  required> <span class="f-13 pull-right mr-3" style="margin-top:7px"><i class="fa fa-paperclip"></i></span>
                           <div class="clearfix"></div>
                      </div>                                  
                  </div>                     
              </div>
              
              <div class="col-md-4">
                  <div class="form-group profile-form mb-1">
                      <div class="bg-white box-style p-2 mt-4" style="border-radius:8px">
                           <input type="file" class="form-control social-input f-12" name="image_videos_post" value="Upload Brand Logo" required> <span class="f-13 pull-right mr-3" style="margin-top:7px"><i class="fa fa-paperclip"></i></span>
                           <div class="clearfix"></div>
                      </div>                                  
                  </div>                     
              </div>
              
              <div class="col-md-4">
                  <div class="form-group profile-form mb-1">
                      <div class="bg-white box-style p-2 mt-4" style="border-radius:8px">
                           <input type="file" class="form-control social-input f-12" name="image_videos_post" value="Upload Brand Logo"  required> <span class="f-13 pull-right mr-3" style="margin-top:7px"><i class="fa fa-paperclip"></i></span>
                           <div class="clearfix"></div>
                      </div>                                  
                  </div>                     
              </div>
              
              <div class="col-md-12">
                  <div class="form-group profile-form">
                      <label class="font-semi-bold">total Maximum 3. And length of video is maximum 60s</label>
                  </div>
              </div>
              
              <div class="col-md-6">
                  <div class="form-group profile-form">
                      <label>Caption for Post</label>
                      <input type="text" class="form-control" placeholder="Enter your caption for post" name="caption_for_post" value="" required>
                  </div>
              </div>
              
              <div class="col-md-6">
                  <div class="form-group profile-form">
                      <label>Instagram handle</label>
                      <input type="text" class="form-control" placeholder="Enter your instagram handle" name="instagram_handle_post" value="" required>
                  </div>
              </div>
              
              
              <div class="col-md-6">
                  <div class="form-group profile-form">
                      <label>Hashtag</label>
                      <input type="text" class="form-control" placeholder="# Enter your hashtag" name="hashtag_post" value="" required>
                  </div>
              </div>
              <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
                       <button class="btn btn-danger">Cancel</button>
                     </div>
                 
             </form>
           </div>
          
           
           
    
    </div>
</section>
</div>
</div>








{{--<div class="row">         
  <section class="content pb-0">
    <div class="row">
      <section class="col-md-12 pt-5 pb-0">
            <div class="bg-white box-style">
                <form method="POST" action="{{ route('userdetail.store') }}" enctype="multipart/form-data">
                 @csrf
                    <h3 style="text-align:center; padding:50px;">General Details</h3>
                    <div class="row profile-form-box">
                        <div class="col-md-12">
                            <div class="form-group profile-form">
                              <label>Full Name</label>
                              <input type="text" class="form-control" placeholder="Enter your full name"  name="name" value="" required/>
                            </div>
        
                                <div class="form-group profile-form">
                                  <label>Brand Name</label>
                                  <input type="text" class="form-control" placeholder="Enter your full name"  name="brand_name" value="" required/>
                                </div>
                            <div class="form-group profile-form">
                              <label>Email</label>
                              <input type="text" class="form-control" placeholder="example@gmail.com"  name="email"  value="" required/>
                            </div>                     
                            <div class="form-group profile-form">
                              <label>Contact Number</label>
                              <input type="text" class="form-control" placeholder="Enter your Phone Number"  name="phone" value="" required/>
                            </div>
                            <div class="form-group profile-form">
                              <label>Messages</label>
                              <input type="text" class="form-control"  name="message" placeholder="Write something" required/>
                            </div>
                            <div class="form-group profile-form">
                              <label>Upload Brand Logo</label>
                              <input type="file" class="form-control" name="brand_logo" id="brand_logo" placeholder="upload" required />
                            </div>
                        </div>
                    </div>
                        <h3 style="text-align:center; padding:50px;">Campaign Details For Instagram Story</h3>
                        <div class="row profile-form-box">
                            <div class="col-md-12">
                                <div class="form-group profile-form">
                                  <label>Upload Images/Video</label>
                                  <input type="file" class="form-control" placeholder="Upload"  name="image_videos_story" id="image_videos_story" value="" required/>
                                </div>
            
                                    <div class="form-group profile-form">
                                      <label>Hashtag</label>
                                      <input type="text" class="form-control" placeholder=""  name="hashtag_story" value="" required/>
                                    </div>                   
                                <div class="form-group profile-form">
                                  <label>Instagram Handle</label>
                                  <input type="text" class="form-control" placeholder=""  name="instagram_handle_story" value="" required/>
                                </div>
                                <div class="form-group profile-form">
                                  <label>Q & A Topic</label>
                                  <input type="text" class="form-control"  name="QA_topic" placeholder="Write something" value="" required />
                                </div>
                            </div>
                          
                        </div>    
                        <h3 style="text-align:center; padding:50px;">Campaign Details For Instagram Post</h3>
                        <div class="row profile-form-box">
                            <div class="col-md-12">
                                <div class="form-group profile-form">
                                  <label>Upload Images/Video</label>
                                  <input type="file" class="form-control" placeholder="Upload"  name="image_videos_post" value="" required/>
                                </div>
            
                                    <div class="form-group profile-form">
                                      <label>Caption for Post</label>
                                      <input type="text" class="form-control" placeholder=""  name="caption_for_post" value="" required/>
                                    </div>                   
                                <div class="form-group profile-form">
                                  <label>Instagram Handle</label>
                                  <input type="text" class="form-control" placeholder=""  name="instagram_handle_post" value="" required/>
                                </div>
                                <div class="form-group profile-form">
                                        <label>Hashtag</label>
                                        <input type="text" class="form-control" placeholder=""  name="hashtag_post" value="" required/>
                                      </div> 
                                
                            </div>
                          
                        </div>    
                      
                      <div class="col-md-12 text-center">
                     <button class="btn btn-primary" name="submit">Submit</button>
                          <button class="btn btn-danger">Cancel</button>
                        </div>
                      
                   
                    
                    
                    
            
            </div>
        </form>
            
      </section>
    </div>
  </section>
        
            
</div>--}}
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