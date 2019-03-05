@extends('layouts.mainlogin')

@section('css')
@endsection

@section('content')
<div class="col-md-6 col-md-offset-3">
    <p class="mt-5 text-center"><a href="{{ route('homes') }}" style="color: #fff !important; font-size:25px; font-weight:700; " >BrandCer</a></p>
    <div class="login-box">
        <form  method="POST" action="{{ url('login') }}">
            @csrf
        <p class="text-uppercase f-16 text-theme font-semi-bold float-left">Creator Log In</p>
        <p class="float-right"><a href="#"><img src="{{ asset('assets/images/sign-in-blue.jpg')}}" class="float-left" /></a> <a href="#"><img src="{{ asset('assets/images/sign-up-white.jpg')}}" class="float-left" /></a></p>
        <div class="clearfix"></div>          
        <input style="background:none;" type="email"  class="form-control username" name="email" id="email" placeholder="Enter Your Mail Id" value="{{ old('email') }}" required autofocus/>
        
        <div style=" position:relative;">
        <input type="password" style="background: #f8f8f8;" class="form-control Password" name="password" id="pwd"  placeholder="***********" required /> 
        <i style="position:absolute; top:15px; right:15px; color:#4896e9;" id="pass-status" class="fa fa-eye-slash" aria-hidden="true" onClick="viewPassword()"></i>
        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
        
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
            @endif
        </div>

    
        {{-- <p class="float-left">

            <input class="with-gap" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember" class="font-weight-normal text-dark-grey text-uppercase f-12 font-semi-bold">REMEMBER ME</label>
        </p>--}}
        <p class="float-right font-weight-normal border-bottom mt-1">
            <a href="{{ route('password.request') }}" class="text-dark-grey text-uppercase f-11 font-semi-bold">Forgot Your Password?</a>
        </p>
        <div class="clearfix"></div>                    
    </div>
    <button class="btn btn-primary login btn-block" type="submit">Log In</button>
    </form>
    <p class="mt-5 text-center text-dark-grey f-14">Don't have an account? <a href="{{ URL('register') }}" class="text-theme" style="text-decoration:underline">Sign up</a> here.</p>      
</div>
@endsection

@section('js')
<script>

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
