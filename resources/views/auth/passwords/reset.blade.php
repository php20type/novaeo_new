@extends('admin.layouts.auth_layout')

@section('content')
<div class="login-sec-fix-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-login-img-fix">
                    <img src="{{ asset('assets/admin/img/home/login-left-img.png')}}">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-login-sec-fix">
                    <h4>{{ __('Reset Password') }}</h4>
                    <form class="login-form-fix" method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group mb-4">
                            <label>Email *</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label>Password *</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="form-group mb-4">
                            <label>Confirm Password *</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>
                        <div class="form-group mb-5">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection