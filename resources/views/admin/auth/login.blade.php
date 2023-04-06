@extends('admin.layouts.auth_layout')

@section('title','Login')
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
                    <h4>Login as a Admin User</h4>
                    <form class="login-form-fix" method="post" action="{{ route('admin.login')}}">
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
                        <div class="form-group position-relative mb-4">
                            <label>Password *</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> <i class="fa-solid fa-eye login-icon-hide" onclick="showPassword(this)"></i>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-check mb-3 d-flex">
                            <div class="remember-me-tab">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember Me
                                </label>
                            </div>
                            <div class="forgot-psw-section">
                                <a href="{{ route('admin.password.request')}}" class="pull-right"> Forget Password</a>

                            </div>
                        </div>
                        <div class="form-group mb-5">
                            <button type="submit" class="login-btn" value="">Login</button>
                        </div>
                        <div class="dont-account text-center">
                            <p>Don’t have an account?</p>
                            <a href="{{ route('admin.register-view')}}">Click me to create a new Account </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    function showPassword(obj) {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        $(obj).toggleClass('fa-eye');
        $(obj).toggleClass('fa-eye-slash');

    }
</script>
@endsection