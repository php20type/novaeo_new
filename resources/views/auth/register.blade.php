@extends('admin.layouts.auth_layout')

@section('title','Login')
@section('content')
<div class="login-sec-fix-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-login-img-fix">
                    <img src="{{ asset('assets/admin/img/home/sign-left-img.png')}}">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-login-sec-fix">
                    <h4>Sign Up</h4>
                    <form class="login-form-fix" method="post" action="{{ route('register')}}">
                        @csrf
                        <div class="form-group mb-2">
                            <label>Username *</label>
                            <input id="name" type="text" class="form-control position-relative @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">

                            <label>Email *</label>
                            <input id="email" type="email" class="form-control position-relative @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group position-relative mb-2">
                            <label>Password *</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <i class="fa-solid fa-eye login-icon-hide" onclick="showPassword(this)"></i>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group position-relative mb-2">
                            <label>Re-Enter Password *</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <i class="fa-solid fa-eye login-icon-hide" onclick="showConfirmPassword(this)"></i>
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="login-btn" value="">Sign Up</button>
                        </div>
                        <div class="dont-account text-center">
                            <p>already have an account? <a href="{{ route('login')}}">Login!</a></p>
                        </div>
                        <div class="sign-up-sec">
                            <span>Sign Up with</span>
                            <a href="{{ route('candidate.google.login')}}" class="google-signup-btn btn btn-block"><img src="{{ asset('assets/admin/img/home/google.svg')}}"> &nbsp; Google</a>
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
    function showConfirmPassword(obj){
        var x = document.getElementById("password-confirm");
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