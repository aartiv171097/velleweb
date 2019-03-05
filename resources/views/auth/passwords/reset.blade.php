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
 <div class="col-md-6 col-md-offset-3">
                    <p class="mt-5 text-center"><a href="{{ route('homes') }}" style="color: #fff !important; font-size:25px; font-weight:700; " >BrandCer</a></p>
                    <div class="login-box">

   
            <div class="card">
                <div class="card-header" id="reset">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        

                        <div class="form-group row" style="margin:0px 40px;">
                                <input id="password" type="password" class="form-control sign-up mt-0 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter Your Password" required>

                               
                        </div>

                        <div class="form-group row" style="margin:10px 40px;">
                                <input id="password-confirm" type="password" class="form-control sign-up mt-0" name="password_confirmation" placeholder="Enter Your Confirm Password" required>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
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
            </div>
        </div>
</div>
@endsection
@section('js')


@endsection

