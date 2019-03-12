@component('mail::message')
<img src="{{ asset('assets/images/Forgot-Password.png') }}">

@component('mail::button', ['url' => $user->url])
Reset Password
@endcomponent

This password reset link will expire in 60 minutes.<br>

If you did not request a password reset, no further action is required.<br>
Thanks,<br>
{{--{{ config('app.name') }}--}}
@endcomponent
