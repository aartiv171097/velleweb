@extends('layouts.mainlogin')

@section('content')
<div class="col-md-6 col-md-offset-3" style="position:inherit; left:50%; margin-top:5%;">
    <p class="mt-5 text-center"><a href="{{ route('homes') }}" style="color: #fff !important; font-size:25px; font-weight:700; " >BrandCer</a></p>
    <div class="login-box">
            <p class="text-uppercase f-16 text-theme font-semi-bold float-left"> {{ __('Verify Your Email Address') }}</p>
            <p class="float-right"><a class="btn btn-primary" type="submit" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">LOGOUT</a></p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            <div class="clearfix"></div>  
            <div class="card-body">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                         {{ __('A fresh verification link has been sent to your email address.') }}
                     </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }}, <a class="text-primary" href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
            </div>
    </div>
</div>    
@endsection
