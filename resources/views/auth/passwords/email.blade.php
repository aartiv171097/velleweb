@extends('layouts.mainlogin')
@section('css')

@endsection

@section('content')
<div class="col-md-6 col-md-offset-3" style="padding-bottom: 25%;">
    <p class="mt-5 text-center">
        <a href="{{ route('homes') }}" style="color: #fff !important; font-size:25px; font-weight:700; " >BrandCer</a>
    </p>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf         
        <div class="login-box">                        
            <div class="card-header" style="text-align:center;padding-bottom: 38px;font-size: 20px;color: #4793e8;">{{ __('Reset Password') }}</div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">{{ session('status') }}</div>
                @endif
            </div>               
            <div class="form-group row">           
                <input id="email" type="email" class="form-control sign-up mt-0{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Enter Your Mail Id" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif                                            
            </div>                            
        
            <div class="clearfix"></div>                    
        </div>               
        <div class="form-group row mb-0">
            <div class="col-md-12 offset-md-12">
                <button type="submit" class="btn btn-primary login btn-block">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </div>
    </form>                                                  
</div>

@endsection