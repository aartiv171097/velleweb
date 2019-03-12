@extends('layouts.mainlogin')
@section('css')
<style>
#reset{
    text-align:center;
    padding-bottom: 38px;
    font-size: 20px;
    color: #4793e8;
}
</style>

@endsection
@section('content')
<div class="col-md-6 col-md-offset-3" style="padding-bottom:20%;">
    <p class="mt-5 text-center"><a href="{{ route('homes') }}" style="color: #fff !important; font-size:25px; font-weight:700; " >BrandCer</a></p>
    <form method="POST" action="{{ route('password.update') }}">
        <div class="login-box">
            <div class="card-header" id="reset">{{ __('Reset Password') }}</div>
        
            @if (session('expired'))
            <div class="card-body">
                <div class="alert alert-success" role="alert">{{ session('expired') }}</div>
            </div>
            @endif
            {{csrf_field()}}
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="hidden" name="email" value="{{ $email }}">
            <div class="form-group row">
                <input id="password" type="password" class="form-control sign-up mt-0 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter Your Password" required>
                <i style="position:absolute; top:125px; right:30px; color:#4896e9;" id="pass-status" class="fa fa-eye-slash" aria-hidden="true" onClick="viewPassword()"></i>
            </div>

            <div class="form-group row">
                <input id="password-confirm" type="password" class="form-control sign-up mt-0" name="password_confirmation" placeholder="Enter Your Confirm Password" required>
                <i style="position:absolute; top:205px; right:30px; color:#4896e9;" id="pass-status1" class="fa fa-eye-slash" aria-hidden="true" onClick="viewPassword1()"></i>

                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-12 offset-md-12">
                <button type="submit" class="btn btn-primary login btn-block">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
@section('js')
<script>
    function viewPassword()
{
  var passwordInput = document.getElementById('password');
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
    <script>
            function viewPassword1()
        {
          var passwordInput = document.getElementById('password-confirm');
          var passStatus = document.getElementById('pass-status1');
         
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

