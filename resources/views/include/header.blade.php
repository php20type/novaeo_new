<!-- Header Section Start -->
<header class="header-main-sec">
    <div class="container">
        <div class="header-main">
            <div class="header-logo-area">
                <div class="header-logo">
                    <a href="{{ route('home')}}">
                        <img src="{{ asset('assets/front/img/header-logo.png')}}" />
                    </a>
                </div>
                <div class="header-search-list">
                    <div class="header-menu-area">
                        <div class="header-menubar">
                            <a href="javascript:void(0)" class="menubar-btn">
                                <i class="fa-solid fa-bars"></i>
                            </a>
                            <nav class="header-nav">
                                <div class="menubar-close-btn">
                                    <a href="javascript:void(0)">
                                        <i class="fa-solid fa-xmark"></i>
                                    </a>
                                </div>
                                <ul>
                                    <li @if(request()->is('/')) class="active" @endif>
                                        <a href="{{ route('home')}}">Home </a>
                                    </li>
                                    <!-- <li @if(request()->is('about-us')) class="active" @endif>
                                        <a href="{{ route('about-us')}}">About Us </a>
                                    </li> -->
                                    <li @if(request()->is('our-team')) class="active" @endif>
                                        <a href="{{ route('our-team')}}">Our Team</a>
                                    </li>
                                    <li @if(request()->is('visionary')) class="active" @endif>
                                        <a href="{{ route('visionary')}}">The Visionary</a>
                                    </li>
                                    <li @if(request()->is('career')) class="active" @endif>
                                        <a href="{{ route('career')}}">Careers</a>
                                    </li>
                                    <!-- <li @if(request()->is('apply-now')) class="active" @endif>
                                        <a href="{{ route('apply-now')}}">Apply Now</a>
                                    </li> -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                    @if(empty(Auth::user()))
                    <div class="header-btn">
                        <a href="{{ route('login')}}">Sign In</a>
                    </div>
                    @else
                    @php
                    if(Auth::user()->profile!=NULL){
                        $profile=asset('uploads/profile').'/'.Auth::user()->profile;
                    }else{
                        $profile=asset('assets/front/img/default.png');

                    }
                    @endphp
                    <div class="user-login-block ">
                        <div class="user-login-img">
                            <img src="{{$profile}}">
                        </div>
                        <div class="user-login-content-block">
                            <div class="user-login-content dropdown">
                                <a href="#" class="dropdown-toggle" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <h5>{{ ucfirst(Auth::user()->name)}}</h5>
                                    <p>{{ Auth::user()->email}}</p>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('candidate-profile')}}"><i class="fa fa-user"></i> Manage Accounts</a>
                                    <a class="dropdown-item" href="{{ route('logout')}}"><i class="fa fa-sign-out"></i> Logout</a>
                                </div>

                            </div>
                            <div class="user-login-arrow">
                                <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L4.39474 5L8 1" stroke="#868686" stroke-linecap="round"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
  
</header>
<!-- Header Section End -->