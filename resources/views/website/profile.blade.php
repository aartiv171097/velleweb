@extends('layouts.capsmain')
@section('css')

@endsection
@section('content')
<div class="row" style="padding:30px;">         
  <section class="content pb-0">
    <div class="row">
      <section class="col-md-8 col-md-offset-1 pt-5 pb-0">
        <form id="UpdataProfileForm" action="{{ route('profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
       
            <div class="bg-white box-style">
                      <p id="ImageWrapper" class="text-center profile-setting" style="cursor:pointer;">
                        @empty(Auth::user()->image)                                
                        <img src="{{ asset('asset/images/profile-pic.png')}}"  class="img-border-radius" />
                        @else
                        <img src="{{ asset('images/user_images/'.Auth::user()->image)}}" id="userimage" class="img-border-radius" />
                        @endempty
                    
                   
                        <span><i style="bottom: -38px;" class="fa fa-camera"></i></span>
                        </p>
                    
                    <input type="hidden" name="old_image" value="{{ Auth::user()->image }}">
                    
                     <input type="file" name="profilepic" id="pic" style="display: none;" onchange="readURL(this);"> 

                    <div class="row profile-form-box pt-4" style="margin-top:43px;">
                      
                        <div class="col-md-5 ">
                            <div class="form-group profile-form">
                              <label>Full Name</label>
                              <input type="text" class="form-control" placeholder="Enter your full name"  name="name" value="{{ Auth::user()->name }}"/>
                            </div>
                        </div>
                      <div class="col-md-2">
                            &nbsp;
                        </div>
                      <div class="col-md-5" >
                            <div class="form-group profile-form">
                              <label>Email</label>
                              <input type="text" class="form-control" placeholder="example@gmail.com"  name="email" readonly="readonly" value="{{ Auth::user()->email }}"/>
                             
                            </div>                     
                        </div>
                      <div class="col-md-5">
                            <div class="form-group profile-form">
                              <label>Phone Number</label>
                              <input type="text" class="form-control"   placeholder="Enter your Phone Number" name="phone" id="phone"  value="{{ Auth::user()->phone }}"/>
                              <span id="spnPhoneStatus"></span>
                            </div>
                        </div>
                      <div class="clearfix"></div>
                      <div class="col-md-5">
                         <a href="{{ route('password.edit') }}" class="btn btn-success">Change Password</a>
                      </div>
                      {{--<div class="col-md-5">
                            <div class="form-group profile-form">
                              <label>Current Password</label>
                              <input type="password" class="form-control" id="cpassword" name="current-password" placeholder="******" />
                              <p class="float-right font-weight-normal border-bottom mt-1">
                                <a href="{{ route('password.request') }}" class="text-dark-grey text-uppercase f-11 font-semi-bold">Forgot Your Password?</a>
                            </p>
                            </div>
                        </div>
                      <div class="clearfix"></div>
             
                      <div class="col-md-5">
                            <div class="form-group profile-form">
                              <label>New Password</label>
                              <input type="password" disabled class="form-control" id="password" name="new-password" placeholder="Enter your New Password" />
                            </div>
                        </div>
                      <div class="col-md-2">
                            &nbsp;
                        </div>
                      <div class="col-md-5">
                            <div class="form-group profile-form">
                              <label>Confirm Password</label>
                              <input type="password" disabled class="form-control" id="confirm_password" name="confirm-password" placeholder="Enter your Confirm Password" />
                            </div>
                        </div>--}}
                     
                        <div class="clearfix"></div><br>
                      
                      <div class="col-md-12 text-center">
                            <button class="btn btn-primary" type="submit">Save Changes</button>
                          <button class="btn btn-danger" >Cancel</button>
                        </div>
                      
                    </div>
                    
                    
                    
            
            </div>
        </form>
      </section>
    </div>
  </section>
        
            
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
          <div class="col-md-8 col-md-offset-2"><input type="text" class="form-control" style="background: none; color: #fff; font-size: 13px" value="https://www.instagram.com/?hl=en" /></div>
          <br><br>
            <h5 class="text-white"><a href="#">Copy the Link</a></h5>
        </div>
      </div>
  
    </div>
  </div>
@endsection   
      
@section('js')
<script>
 // window.somethingMadeChange=false;
  //(function(){
    //$(window).on("beforeunload", function(e) {
      //if(window.somethingMadeChange){
       // return confirm("Do you really want to close?"); 
     // }
    //});
    // $(document).on('change keyup', 'input, select, textarea',function(){
    //   window.somethingMadeChange = true;
    // });
    // $('#UpdataProfileForm').
//  }());
  // $(document).ready(function(){
   


  //   $('#cpassword').on('keyup', function(){

  //     console.log(this);
  //     if($.trim($(this).val()) != ''){
  //       $('#password').attr('disabled', false);
  //       $('#confirm_password').attr('disabled', false);
  //     }else{
  //       $('#password').attr('disabled', true);
  //       $('#confirm_password').attr('disabled', true);
  //     }
  //   });
  // });
{{-- </script> --}}

//var password = document.getElementById("password")
//, confirm_password = document.getElementById("confirm_password");

//function validatePassword(){
//if(password.value != confirm_password.value) {
  // confirm_password.setCustomValidity("Passwords Don't Match");
// } else {
  // confirm_password.setCustomValidity('');
// }
// }

// password.onchange = validatePassword;
// confirm_password.onkeyup = validatePassword;

{{-- </script> --}}
// <script>

$("#ImageWrapper").on('click', function(){
     $('#pic').click();
   });

  jQuery(document).ready(function($){
    $cf = $('#phone');
    $cf.blur(function(e){
        phone = $(this).val();
        phone = phone.replace(/[^0-9]/g,'');
        if (phone.length != 10)
        {
          $('#spnPhoneStatus').html('Not Valid');
            $('#spnPhoneStatus').css('color', 'green');
            $('#phone').val('');
            $('#phone').focus();
        }

        else
        {

                   $('#spnPhoneStatus').html('');
 
        }
    });
});
  </script>
<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#userimage').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>




@endsection