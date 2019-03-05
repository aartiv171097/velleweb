@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
        <div class="container-fluid">
        <div class="row">
       {{  dd('fghj')}}  
        <section class="content pb-0">
            <div class="row">
              <section class="col-md-8 col-md-offset-1 pt-5 pb-0">
                <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('put')
                    <div class="bg-white box-style">
                              <p id="ImageWrapper" class="text-center profile-setting" style="cursor:pointer;">
                                @empty(Auth::user()->image)                                
                                <img src="{{ asset('asset/images/profile-pic.png')}}" class="img-border-radius" />
                                @else
                                <img src="{{ asset('images/user_images'.'/'.Auth::user()->image)}}" class="img-border-radius" />
                                @endempty
                               <span><i class="fa fa-camera"></i></span>
                              </p>
                           <input type="hidden" name="old_image" value="{{ Auth::user()->image }}">
                           <input type="file" name="image" id="Image" style="display:none;">
                           <div class="row profile-form-box">
                               <div class="col-md-5">
                                   <div class="form-group profile-form">
                                      <label>Full Name</label>
                                      <input type="text" class="form-control" placeholder="Enter your full name" readonly="readonly" name="name" value="{{ Auth::user()->name }}"/>
                                   </div>
                               </div>
                              <div class="col-md-2">
                                    &nbsp;
                               </div>
                              <div class="col-md-5">
                                   <div class="form-group profile-form">
                                      <label>Email</label>
                                      <input type="text" class="form-control" placeholder="example@gmail.com"  name="email" readonly="readonly" value="{{ Auth::user()->email }}"/>
                                      <p class="text-dark-grey mt-2 f-11">This email is unconfirmed - <a href="#" class="text-theme text-underline">Confirmation</a></p>
                                   </div>                     
                               </div>
                              <div class="col-md-5">
                                   <div class="form-group profile-form">
                                      <label>Phone Number</label>
                                      <input type="text" class="form-control" placeholder="Enter your Phone Number" readonly="readonly" name="phone" value="{{ Auth::user()->phone }}"/>
                                   </div>
                               </div>
                              <div class="clearfix"></div>
                              <div class="col-md-5">
                                   <div class="form-group profile-form">
                                      <label>Current Password</label>
                                      <input type="text" class="form-control"  name="current-password" placeholder="********" />
                                      <p class="text-dark-grey mt-2 f-11"><a href="#" class="text-dark-grey text-underline">Forgot Password?</a></p>
                                   </div>
                               </div>
                              <div class="clearfix"></div>
                              <div class="col-md-5">
                                   <div class="form-group profile-form">
                                      <label>New Password</label>
                                      <input type="text" class="form-control" name="new-password" placeholder="Enter your New Password" />
                                   </div>
                               </div>
                              <div class="col-md-2">
                                    &nbsp;
                               </div>
                              <div class="col-md-5">
                                   <div class="form-group profile-form">
                                      <label>Confirm Password</label>
                                      <input type="text" class="form-control" name="confirm-password" placeholder="Enter your Confirm Password" />
                                   </div>
                               </div>
                              
                              
                              <div class="col-md-12 text-center">
                                   <button class="btn btn-primary">Save Changes</button>
                                  <button class="btn btn-danger">Cancel</button>
                               </div>
                              
                           </div>
                           
                           
                           
                    
                    </div>
                </form>
              </section>
              
              
                
              
            </div>
            
             
            
          </section>
        
            
          </div>
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