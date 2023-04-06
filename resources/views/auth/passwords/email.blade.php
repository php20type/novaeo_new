@extends('admin.layouts.auth_layout')

@section('title','Reset Password')
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
                @if (session('status'))
                <p class="alert alert-success">{{ session('status') }}</p>
                @endif
                <div class="right-login-sec-fix">
                    <h4>{{ __('Reset Password') }}</h4>
                    <form class="login-form-fix" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group mb-4">
                            <label>Email *</label>
                            <input id="email" type="email" class="form-control position-relative @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="form-group mb-5">
                            <button type="submit" class="login-btn">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection