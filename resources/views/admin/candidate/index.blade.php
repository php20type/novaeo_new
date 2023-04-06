@extends('admin.layouts.app')

@section('title','Candidate')
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
                    <h4>Candidates</h4>
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
                                <a href="javascript:void(0)">Candidates</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            @include('admin/include/header')

        </div>
    </div>
 
    <div class="lorem-ipsm-sec-main">
        <div class="custom-title">
            <h2>New Applicants</h2>
        </div>
        <div class="lorem-ipsm-inner">
            <div class="lorem-ipsm-dropdown">
                <!-- <form>
                    <select>
                        <option class="lorem-ipsm-list">
                            Status: Awaiting Reviewed
                        </option>
                    </select>
                </form> -->
            </div>
            <div class="row">
                @foreach($candidates as $post)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="lorem-ipsm-con-block">
                        <div class="lorem-ipsm-content">
                            <div class="lorem-ipsm-img-block">
                                <img src="{{ asset('uploads/profile').'/'.$post->profile}}" class="candidate-profile-image"/>
                            </div>
                            <div class="lorem-ipsm-content-block">
                                <h3>{{ $post->name}}</h3>
                                <h4>{{ $post->job->title}}</h4>
                                <p>
                                    <a href="{{$post->profile_link}}" target="_()">{{ $post->profile_link}}</a>
                                </p>
                                </div>
                                <div class="lorem-ipsm-btn">
                                    <a href="{{ route('admin.candidate.show',$post->id)}}">View Details</a>
                                </div>

                                <div class="lorem-ipsm-list">
                                    <ul>
                                        <li>
                                            <a class="lorem-ipsm-icon" href="javascript:void(0)">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 12C4.81331 12 3.65328 11.6481 2.66658 10.9888C1.67989 10.3295 0.910851 9.39246 0.456726 8.2961C0.0025996 7.19975 -0.11622 5.99335 0.115291 4.82946C0.346802 3.66558 0.918247 2.59648 1.75736 1.75736C2.59648 0.918247 3.66558 0.346802 4.82946 0.115291C5.99335 -0.11622 7.19975 0.0025996 8.2961 0.456726C9.39246 0.910851 10.3295 1.67989 10.9888 2.66658C11.6481 3.65328 12 4.81331 12 6C11.9983 7.59077 11.3656 9.1159 10.2407 10.2407C9.1159 11.3656 7.59077 11.9983 6 12ZM6 1C5.0111 1 4.0444 1.29325 3.22215 1.84265C2.39991 2.39206 1.75904 3.17296 1.38061 4.08659C1.00217 5.00022 0.90315 6.00555 1.09608 6.97545C1.289 7.94536 1.76521 8.83627 2.46447 9.53554C3.16373 10.2348 4.05465 10.711 5.02455 10.9039C5.99446 11.0969 6.99979 10.9978 7.91342 10.6194C8.82705 10.241 9.60794 9.6001 10.1574 8.77785C10.7068 7.95561 11 6.98891 11 6C10.9985 4.67437 10.4713 3.40344 9.53393 2.46608C8.59656 1.52871 7.32564 1.00146 6 1Z" fill="#787878"></path>
                                                    <path d="M3.97337 7.799L3.44287 6.951L5.49987 5.6625V3H6.49987V6.2165L3.97337 7.799Z" fill="#787878"></path>
                                                </svg>
                                            </a>
                                            <div class="job-icon-title">
                                                <p>{{ (new Carbon\Carbon($post->created_at))->diffForHumans()}}</p>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="lorem-ipsm-icon" href="javascript:void(0)">
                                                <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.50014 13.0044L5.12097 12.6794C4.59826 12.2417 0.0341797 8.3 0.0341797 5.41671C0.0341797 3.96704 0.610059 2.57676 1.63512 1.55169C2.66019 0.52662 4.05048 -0.0492554 5.50014 -0.0492554C6.9498 -0.0492554 8.34009 0.52662 9.3652 1.55169C10.3902 2.57676 10.9661 3.96704 10.9661 5.41671C10.9661 8.3 6.40201 12.2417 5.88147 12.6815L5.50014 13.0044ZM5.50014 1.13267C4.36434 1.13396 3.27542 1.58572 2.47229 2.38886C1.66915 3.19199 1.21739 4.2809 1.2161 5.41671C1.2161 7.22803 4.0241 10.1216 5.50014 11.446C6.97618 10.1211 9.7842 7.22587 9.7842 5.41671C9.7829 4.2809 9.3311 3.19199 8.52799 2.38886C7.72485 1.58572 6.63594 1.13396 5.50014 1.13267Z" fill="#787878"></path>
                                                    <path d="M5.50016 7.5834C5.07164 7.5834 4.65274 7.45632 4.29643 7.21824C3.94012 6.98016 3.66241 6.64178 3.49842 6.24587C3.33443 5.84996 3.29153 5.41432 3.37513 4.99403C3.45873 4.57374 3.66509 4.18767 3.9681 3.88466C4.27111 3.58164 4.65718 3.37529 5.07747 3.29169C5.49776 3.20809 5.93341 3.25099 6.32931 3.41498C6.72522 3.57897 7.06361 3.85668 7.30168 4.21299C7.53976 4.56929 7.66683 4.9882 7.66683 5.41672C7.66683 5.99136 7.43856 6.54246 7.03223 6.94879C6.6259 7.35512 6.0748 7.5834 5.50016 7.5834ZM5.50016 4.3334C5.2859 4.3334 5.07645 4.39693 4.8983 4.51596C4.72014 4.635 4.58129 4.8042 4.49929 5.00215C4.4173 5.2001 4.39585 5.41793 4.43765 5.62807C4.47945 5.83822 4.58262 6.03126 4.73413 6.18277C4.88564 6.33426 5.07867 6.43744 5.28882 6.47924C5.49896 6.52104 5.71678 6.49959 5.91474 6.41759C6.11269 6.3356 6.28188 6.19674 6.40092 6.01859C6.51996 5.84044 6.5835 5.63099 6.5835 5.41672C6.5835 5.12941 6.46936 4.85386 6.2662 4.65069C6.06303 4.44753 5.78748 4.3334 5.50016 4.3334Z" fill="#787878"></path>
                                                </svg>
                                            </a>
                                            <div class="job-icon-title">
                                                <p>{{ $post->country}}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                           
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </div>
</div>
@endsection