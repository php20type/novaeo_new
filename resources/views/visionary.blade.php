@extends('layouts.app')

@section('content')
<!-- Banner Section Start -->
<section class="banner-sec">
    <div class="container-fluid">
        <div class="banner-con-inner">
            <div class="banner-con-block">
                <img src=" {{ asset('assets/front/img/visionary-bg-img.png')}}" />
                <div class="banner-content">
                    <h2>The Visionary</h2>
                    <div class="banner-menu-block">
                        <ul>
                            <li>
                                <a href="javascript:void(0)"> Home</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">The Visionary</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->
<!-- Single Visionary Section Start -->
<section class="single-visionary-sec-main">
    <div class="container">
        <div class="single-visionary-inner">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-visionary-img-block">
                        <div class="single-visionary-img">
                            <img src="{{ asset('assets/front/img/single-visionary-img.png')}}" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="single-visionary-con-block">
                        <div class="single-visionary-box">
                            <div class="single-visionary-box-content">
                                <h3>Brandon Middleton</h3>
                                <p>CEO, Visionary</p>
                            </div>
                            <div class="single-visionary-content">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="single-visionary-icon"><svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.95 5.65261C17.9399 4.89524 17.7981 4.14539 17.531 3.43661C17.2993 2.83877 16.9455 2.29581 16.4922 1.84244C16.0388 1.38908 15.4958 1.03526 14.898 0.803613C14.1983 0.54097 13.4592 0.398955 12.712 0.383613C11.75 0.340613 11.445 0.328613 9.003 0.328613C6.561 0.328613 6.248 0.328613 5.293 0.383613C4.54616 0.399067 3.80735 0.541081 3.108 0.803613C2.51006 1.0351 1.96702 1.38886 1.51363 1.84225C1.06024 2.29563 0.706489 2.83867 0.475 3.43661C0.211831 4.13575 0.0701232 4.87472 0.056 5.62161C0.013 6.58461 0 6.88961 0 9.33161C0 11.7736 -7.45058e-09 12.0856 0.056 13.0416C0.071 13.7896 0.212 14.5276 0.475 15.2286C0.706878 15.8264 1.0609 16.3692 1.51444 16.8224C1.96798 17.2756 2.51106 17.6292 3.109 17.8606C3.80643 18.1338 4.54537 18.286 5.294 18.3106C6.257 18.3536 6.562 18.3666 9.004 18.3666C11.446 18.3666 11.759 18.3666 12.714 18.3106C13.4612 18.2959 14.2004 18.1542 14.9 17.8916C15.4977 17.6597 16.0405 17.3058 16.4938 16.8525C16.9472 16.3991 17.3011 15.8563 17.533 15.2586C17.796 14.5586 17.937 13.8206 17.952 13.0716C17.995 12.1096 18.008 11.8046 18.008 9.36161C18.006 6.91961 18.006 6.60961 17.95 5.65261ZM8.997 13.9496C6.443 13.9496 4.374 11.8806 4.374 9.32661C4.374 6.77261 6.443 4.70361 8.997 4.70361C10.2231 4.70361 11.399 5.19068 12.266 6.05766C13.1329 6.92464 13.62 8.10052 13.62 9.32661C13.62 10.5527 13.1329 11.7286 12.266 12.5956C11.399 13.4625 10.2231 13.9496 8.997 13.9496ZM13.804 5.61061C13.6624 5.61074 13.5222 5.58295 13.3913 5.52882C13.2605 5.4747 13.1416 5.3953 13.0414 5.29517C12.9413 5.19504 12.8619 5.07615 12.8078 4.9453C12.7537 4.81445 12.7259 4.67422 12.726 4.53261C12.726 4.39111 12.7539 4.251 12.808 4.12027C12.8622 3.98954 12.9415 3.87076 13.0416 3.77071C13.1416 3.67065 13.2604 3.59128 13.3912 3.53713C13.5219 3.48298 13.662 3.45511 13.8035 3.45511C13.945 3.45511 14.0851 3.48298 14.2158 3.53713C14.3466 3.59128 14.4654 3.67065 14.5654 3.77071C14.6655 3.87076 14.7448 3.98954 14.799 4.12027C14.8531 4.251 14.881 4.39111 14.881 4.53261C14.881 5.12861 14.399 5.61061 13.804 5.61061Z" fill="#009798" />
                                                <path d="M8.99714 12.3296C10.6557 12.3296 12.0001 10.9851 12.0001 9.32661C12.0001 7.6681 10.6557 6.32361 8.99714 6.32361C7.33863 6.32361 5.99414 7.6681 5.99414 9.32661C5.99414 10.9851 7.33863 12.3296 8.99714 12.3296Z" fill="#009798" />
                                            </svg>
                                        </a>
                                        <a href="https://bit.ly/IGBrandon" class="single-visionary-icon-link">https://bit.ly/IGBrandon</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="single-visionary-icon"><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.6233 2.21199C17.5215 1.84853 17.323 1.51947 17.049 1.25979C16.7673 0.992127 16.4221 0.800661 16.0458 0.703465C14.6378 0.332331 8.99656 0.332331 8.99656 0.332331C6.64479 0.305574 4.29361 0.423259 1.95627 0.68472C1.58003 0.789098 1.23542 0.984841 0.953083 1.25454C0.67567 1.52146 0.474733 1.8506 0.369766 2.21124C0.117615 3.56962 -0.00489752 4.94889 0.00388071 6.33045C-0.00511646 7.71076 0.117095 9.08958 0.369766 10.4497C0.472484 10.8088 0.672671 11.1364 0.950833 11.4011C1.229 11.6658 1.57539 11.857 1.95627 11.9582C3.38307 12.3286 8.99656 12.3286 8.99656 12.3286C11.3513 12.3554 13.7055 12.2377 16.0458 11.9762C16.4221 11.879 16.7673 11.6875 17.049 11.4198C17.3229 11.1602 17.5211 10.8311 17.6226 10.4676C17.8813 9.10979 18.0071 7.72995 17.9982 6.34769C18.0177 4.95958 17.892 3.57324 17.6233 2.21124V2.21199ZM7.20312 8.89764V3.764L11.8966 6.3312L7.20312 8.89764Z" fill="#009798" />
                                            </svg>
                                        </a>
                                        <a href="https://bit.ly/Brandon_YT" class="single-visionary-icon-link">https://bit.ly/Brandon_YT</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Single Visionary Section End -->
<!-- Video Section Start -->
<div class="video-sec-main">
    <div class="container">
        <div class="video-inner">
            <div class="video-title">
                <h2>Brandon’s Vision</h2>
            </div>
            <div class="row">
                @foreach($videos as $video)
                <div class="col-md-4">
                    <div class="video-con-block">
                        <div class="video-img">
                            <video width="320" height="240" id="video-block" onended="videoCount({{$video->id}})" controls="">
                                <source src="{{ asset('uploads/video').'/'.$video->video}}" type="video/mp4" />
                            </video>
                        </div>
                        <div class="video-img-content">
                            <h3>{{ $video->name}}</h3>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- Video Section End -->

@endsection
@section('scripts')
<script>
    function videoCount(video_id) {
        $.ajax({
            url: "{{ route('video-count')}}",
            method: 'GET',
            data: {
                video_id:video_id
            },
            success: function(html) {
                $("#results").append(html);
            }
        });
    }
</script>
@endsection