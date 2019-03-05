@extends('siteadmin.layouts.app')
@section('css')
<style>
    .m-login.m-login--1 .m-login__wrapper {
    overflow: hidden;
    padding: 35% 2rem 2rem 2rem;
    background-color: #0000ff8c;
    margin-top: 45px;
    }
    #placeholder
{
    padding-left: 10px;
}  
#password
{
    padding-left: 10px;
}  
    </style>
@endsection

@section('content')

<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login" >
    <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside" style="margin-top: -50px;">
        <div class="m-stack m-stack--hor m-stack--desktop">
            <div class="m-stack__item m-stack__item--fluid">
                <div class="m-login__wrapper">
                    <div class="m-login__logo">
                            <a href="{{ route('homes') }}" style="color: #fff !important; font-size:25px; font-weight:700; " >BrandCer</a>
                    </div>
                    <div class="m-login__signin"  style="margin-bottom:30px;">
                        <div class="m-login__head">
                            <h3 class="m-login__title">Admin Login</h3>
                        </div>
                        <form class="m-login__form m-form" method="POST" action="{{ route('admin.login') }}">
                            @csrf
                            <div class="form-group m-form__group">
                                <input class="form-control m-input{{ $errors->has('email') ? ' is-invalid' : '' }}"  id="placeholder"type="email" placeholder="{{ __('Enter Your Email') }}" name="email" id="email" autocomplete="off" {{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group m-form__group">
                                <input class="form-control m-input m-login__form-input--last{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" type="password" placeholder="{{ __('Enter Your password') }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row m-login__form-sub">
                                <div class="col m--align-left">
                                    <label class="m-checkbox m-checkbox--focus">
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} > {{ __('remember_me') }}
                                        <span></span>
                                    </label>
                                </div>
                                {{-- <div class="col m--align-right">
                                    <a href="javascript:;" id="m_login_forget_password" class="m-link">{{ __('labels.forget_password') }}</a>
                                </div> --}}
                            </div>
                            <div class="m-login__form-action">
                                <button id="m_login_signin_submit" type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Login</button>
                            </div>
                        </form>
                    </div>
                    {{-- <div class="m-login__forget-password">
                        <div class="m-login__head">
                            <h3 class="m-login__title">Forgotten Password ?</h3>
                            <div class="m-login__desc">Enter your email to reset your password:</div>
                        </div>
                        <form class="m-login__form m-form" action="">
                            <div class="form-group m-form__group">
                                <input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
                            </div>
                            <div class="m-login__form-action">
                                <button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Request</button>
                                <button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">Cancel</button>
                            </div>
                        </form>
                    </div> --}}
                </div>
            </div>
            {{-- <div class="m-stack__item m-stack__item--center">
                <div class="m-login__account">
                    <span class="m-login__account-msg">
                        {{ __('labels.dont_have_account') }}
                    </span>&nbsp;&nbsp;
                    <a href="javascript:;" id="m_login_signup" class="m-link m-link--focus m-login__account-link">{{ __('labels.signup') }}</a>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content m-grid-item--center" style="background-image: url({{ asset('dist/default/assets/app/media/img//bg/bg-4.jpg') }})">
        <div class="m-grid__item">
            <h3 class="m-login__welcome">Velleweb Admin Panel</h3>
        </div>
    </div>
</div>
@endsection

@section('js')
{{-- <script src="{{ asset('dist/default/assets/snippets/custom/pages/user/login.js') }}" type="text/javascript"></script> --}}
@endsection