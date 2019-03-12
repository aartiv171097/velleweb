@extends('layouts.capsmain')
@section('css')

@endsection
@section('content')
<div class="row" style="padding:30px;">         
    <section class="content pb-0">
      <div class="row" style="margin:100px;">
        <section class="col-md-12  pt-5 pb-0">
        <form  action="{{ route('password.update') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
             {{method_field('put')}}
             
                      <div class="col-md-5">
                            <div class="form-group profile-form">
                              <label>New Password</label>
                              <input type="password" class="form-control" id="password" name="password" placeholder="Enter your New Password" />
                            </div>
                        </div>
                      <div class="col-md-2">
                            &nbsp;
                        </div>
                      <div class="col-md-5">
                            <div class="form-group profile-form">
                              <label>Confirm Password</label>
                              <input type="password" class="form-control" id="confirm_password" name="password" placeholder="Enter your Confirm Password" />
                            </div>
                        </div>
                        <div class="clearfix"></div><br>
                      
                      <div class="col-md-12 text-center">
                         <button class="btn btn-primary" type="submit">Save Changes</button>
                         <button class="btn btn-danger" >Cancel</button>
                     </div>

         </form>
        </section>
    </div>
</section>
</div>

  
@endsection   
      
@section('js')
<script> 

var password = document.getElementById("password")
, confirm_password = document.getElementById("confirm_password");

function validatePassword(){
if(password.value != confirm_password.value) {
   confirm_password.setCustomValidity("Passwords Don't Match");
 } else {
   confirm_password.setCustomValidity('');
 }
 }

 password.onchange = validatePassword;
 confirm_password.onkeyup = validatePassword;

 </script>

 
@endsection