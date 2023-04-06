@extends('admin.layouts.app')

@section('title','Logout')
@section('content')
<div class="dash-content-area-sec">
    <div class="mobile-toogle">
        <div class="menu-icon" id="menu-Toggle">
            <a href="#"><img src="{{ asset('assets/admin/img/home/menu.png')}}" /></a>
        </div>
        <div class="mobile-logo">
            <img src="{{ asset('assets/admin/img/logo/main.svg')}}" />
        </div>
    </div>
   
        <div class="dashboard-header-main-sec">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left-title-fix">
                        <h4>Logout</h4>
                        <div class="logo-menu-block">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">
                                        <svg width="9" height="8" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.81373 3.93446L4.72455 0.0876118C4.69511 0.0598391 4.66013 0.0378053 4.62164 0.0227718C4.58314 0.00773823 4.54187 0 4.50019 0C4.45851 0 4.41724 0.00773823 4.37874 0.0227718C4.34024 0.0378053 4.30526 0.0598391 4.27582 0.0876118L0.186639 3.93446C0.0675077 4.04661 0 4.19895 0 4.35783C0 4.68775 0.284922 4.95598 0.635367 4.95598H1.06623V7.70093C1.06623 7.86635 1.20819 8 1.38391 8H3.86482V5.90648H4.97671V8H7.61646C7.79218 8 7.93415 7.86635 7.93415 7.70093V4.95598H8.365C8.53377 4.95598 8.69559 4.89336 8.81472 4.78028C9.06192 4.54662 9.06192 4.16811 8.81373 3.93446Z" fill="#787878" />
                                        </svg>
                                        Home</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="search-sec-main">
                        <div class="search-bar">
                            <input type="text" class="form-control" placeholder="Search" />
                            <img class="search-icon" src="{{ asset('assets/admin/img/home/search-icon.svg')}}" />
                            <a href="{{route('admin.recruter.add')}}" type="button" value="">
                                <img src="{{ asset('assets/admin/img/home/logout.svg')}}" /> Post Job
                            </a>
                        </div>
                        <div class="user-con-block">
                            <div class="user-notification-icon">
                                <div class="notification-icon">
                                    <img src="{{ asset('assets/admin/img/home/user-notification-icon.png')}}" />
                                </div>
                            </div>
                            <div class="user-login-block">
                                <div class="user-logout-img">
                                    <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M34.7343 45.4424C44.9195 41.17 49.7128 29.4497 45.4403 19.2644C41.1678 9.0792 29.4475 4.28596 19.2623 8.55843C9.07708 12.8309 4.28384 24.5512 8.55631 34.7364C12.8288 44.9217 24.5491 49.7149 34.7343 45.4424Z" fill="black" />
                                        <path d="M32.1223 21.7237C32.1223 24.0893 30.1992 26.0124 27.8336 26.0124C25.468 26.0124 23.5449 24.0893 23.5449 21.7237C23.5449 19.3582 25.468 17.4351 27.8336 17.4351C30.1992 17.4351 32.1223 19.3582 32.1223 21.7237Z" fill="white" />
                                        <path d="M27.8331 27.4844C23.4424 27.4844 19.877 31.0498 19.877 35.4406C19.877 36.5893 20.813 37.5253 21.9617 37.5253H33.6961C34.8448 37.5253 35.7808 36.5893 35.7808 35.4406C35.7893 31.0413 32.2239 27.4844 27.8331 27.4844Z" fill="white" />
                                    </svg>
                                </div>
                                <!-- <div class="user-login-content-block">
                        <div class="user-login-content">
                          <a href="javascript:void(0)">
                            <h5>John David</h5>
                            <p>Johndavid@gmail.com</p>
                          </a>
                        </div>
                        <div class="user-login-arrow">
                          <svg
                            width="9"
                            height="6"
                            viewBox="0 0 9 6"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M1 1L4.39474 5L8 1"
                              stroke="#868686"
                              stroke-linecap="round"
                            />
                          </svg>
                        </div>
                      </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
    <div class="logout-sec-main">
        <div class="container">
            <div class="logout-inner">
                <div class="row">
                    <div class="col-md-5">
                        <div class="logout-con-block">
                            <div class="logout-con-block-inner">
                                <h2>You are logged out</h2>
                                <p>
                                    You are Logged out. To see your account Please log in.
                                    Don’t have an account? Sign In to create one.
                                </p>
                                <div class="logout-btn">
                                    <a href="{{ route('admin.login')}}">Log in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="logout-img-block">
                            <img src="{{ asset('assets/admin/img/home/logout-bg-img.png')}}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection