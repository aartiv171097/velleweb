@extends('layouts.mainlogin')

@section('css')
@endsection

@section('content') 

<div class="col-md-6 col-md-offset-3">
    <form id="popup" method="POST" action="{{ url('register') }}">
    @csrf
    <p class="mt-5 text-center" ><a href="{{ route('homes') }}" style="color: #fff !important; font-size:25px; font-weight:700;">BrandCer</a></p>
    <div class="login-box mt-3">
        
        <p class="text-uppercase f-16 text-theme font-semi-bold float-left">Creator Registration</p>
        <p class="float-right"><a href="#"><img src="{{ asset('assets/images/sign-in-white.jpg')}}" class="float-left" /></a> <a href=""><img src="{{ asset('assets/images/sign-up-blue.jpg')}}" class="float-left" /></a></p>
        <div class="clearfix"></div>
        
        <input type="text" class="form-control sign-up" name="name" placeholder="Full Name" required  />
        <select class="form-control sign-up mt-0" name="category" required>
            <option value="">Select Category</option>
            <option value="Fashion & Style">Fashion & Style</option>
            <option value="Travel Blogger">Travel Blogger</option>
            <option value="Health & Fitness">Health & Fitness</option>
            <option value="Comedy">Comedy</option>
            <option value="Technology">Technology</option>
            <option value="Arts & Crafts">Arts & Crafts</option>
            <option value="Photography">Photography</option>
        </select>
        <input type="email" class="form-control sign-up mt-0" name="email" placeholder="Email Address" required />
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
        <div style=" position:relative;">
        <input type="Password"style="background: #f8f8f8;" class="form-control sign-up mt-0" name="password" id="pwd" placeholder="Choose Password" required />   
        <i style="position:absolute; top:15px; right:15px; color:#4896e9;" id="pass-status" class="fa fa-eye-slash" aria-hidden="true" onClick="viewPassword()"></i>
        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif 
        </div>     
        <div class="clearfix"></div>                    
    </div>
    <button  class="btn btn-primary login btn-block" type="submit" id="submit" class="submit">Sign Up</button> 
    </form>         
    <p class="mt-4 text-center text-dark-grey f-14">Already have an account? <a href="{{ route('login') }} " class="text-theme" style="text-decoration:underline">Login</a> here.</p>           
</div>

@endsection

@section('js')
<script>
    function myFunction() {
      alert("plz confirm your email for continue!");
    }
    function viewPassword()
{
  var passwordInput = document.getElementById('pwd');
  var passStatus = document.getElementById('pass-status');
 
  if (passwordInput.type == 'password'){
    passwordInput.type='text';
    passStatus.className='fa fa-eye';
    
  }
  else{
    passwordInput.type='password';
    passStatus.className='fa fa-eye-slash';
  }
}

</script>

@endsection
