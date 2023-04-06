@extends('layouts.app')

@section('content')
<!-- Banner Section Start -->
<section class="banner-sec-main">
    <div class="container-fluid">
        <div class="banner-inner">
            <div class="banner-slider-sec">
                <div class="banner-slide">
                    <div class="banner-con-area">
                        <img src="{{ asset('assets/front/img/banner-bg-img.png')}}" />
                        <div class="slider-img-con">
                            <!-- <h5>Lorem Ipsum is simply dummy text</h5>
                            <h2>Lorem Ipsum.</h2> -->
                        </div>
                    </div>
                </div>
                <div class="banner-slide">
                    <div class="banner-con-area">
                        <img src="{{ asset('assets/front/img/banner-bg-img.png')}}" />
                        <div class="slider-img-con">
                            <!-- <h5>Lorem Ipsum is simply dummy text</h5>
                            <h2>Lorem Ipsum.</span></h2> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->
<!-- About Section Start -->
<section class="about-sec-main">
    <div class="container">
        <div class="about-inner">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img-block">
                        <img src="{{ asset('assets/front/img/about-img2.jpg')}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-con-block">
                        <div class="custom-title">
                            <h2>About us</h2>
                        </div>
                        <div class="about-content">
                            <p>Novaeo is a team of eCommerce specialists that owns and manages several brands in the health and wellness market. Currently, Novaeo is operating 8 brands in the following markets: dietary supplements, tea, natural skincare, cosmetics, bulk health foods, spices, and sweeteners.</p>
                            <p>Novaeo was founded in August 2016 by Brandon Middleton. It is a team under LeiLuna formerly Wholesale Health Connection (WHC) which is the mother brand of Novaeo's awesome health-oriented brands.</p>
                        </div>
                        <!-- <div class="about-btn">
                            <a href="javascript:void(0)">Read More <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1.32861L6 6.32861L1 11.3286" stroke="white" stroke-width="1.2" />
                                    <path d="M8 1.32861L13 6.32861L8 11.3286" stroke="white" stroke-width="1.2" />
                                </svg>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->
<!-- Who we are Section Start -->
<section class="who-sec-main">
    <div class="container">
        <div class="who-inner">
            <div class="row">
                <div class="col-md-6">
                    <div class="who-img-block">
                        <img src="{{ asset('assets/front/img/who-img-1.png')}}">
                        <div class="who-content">
                            <p>Our core competency is the ability to create and launch new product brands in a wide selection of product markets quickly and inexpensively. Our product formulation team is one of or perhaps the best in the USA.</p>
                            <p>As individuals, we are both inspired and inspiring. We are autonomous in our roles and growth while focusing on the collective. As a collective, we are warm but productive, we are jovial but focused. We are the creators of solutions and value.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="who-con-block who-con-block-2">
                        <div class="custom-title">
                            <h2>Who we are</h2>
                        </div>
                        <div class="who-content">
                            <p>We are extremely motivated and very team-oriented with a sort of teal business structure. We are adaptable and ever evolving, and the only thing bigger than our hearts is our vision. We are building an online community and business empire that will empower us to change the world. We value travel, social responsibility, personal development, team development, transparency, and freedom.</p>
                        </div>

                        <div class="who-img-block-2">
                            <img src="{{ asset('assets/front/img/who-img-2.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Who we are Section End -->
<!-- Teal Business Structure Section Start -->
<section class="business-sec-main">
    <div class="container">
        <div class="business-inner">
            <div class="custom-title">
                <h2>Teal Business Structure</h2>
            </div>
            <div class="business-con-block">
                <div class="row">
                    <div class="col-md-4">
                        <div class="business-box">
                            <div class="business-box-block">
                                <div class="business-img">
                                    <img src="{{ asset('assets/front/img/Teal-img-1.png')}}">
                                </div>
                                <div class="business-content">
                                    <h3>Self- Management</h3>
                                    <p>Novaeo eliminates the hierarchy and embraces decentralization. Trust is placed in employees' individual and collective intelligencce. Everyone has a sense of responsibility and decision making is shared.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="business-box">
                            <div class="business-box-block">
                                <div class="business-img">
                                    <img src="{{ asset('assets/front/img/Teal-img-2.png')}}">
                                </div>
                                <div class="business-content">
                                    <h3>Wholeness</h3>
                                    <p>Employees in Novaeo are encouraged to develop not only as professionals, but as human beings. Maximizing individual’s potential by giving freedom to express one’s true self.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="business-box">
                            <div class="business-box-block">
                                <div class="business-img">
                                    <img src="{{ asset('assets/front/img/Teal-img-3.png')}}">
                                </div>
                                <div class="business-content">
                                    <h3>Evolutionary Purpose</h3>
                                    <p>Instead of trying to predict the future, Novaeo goes with the flow, responding to the current purpose. There is no specific direction, the employees listen and understand each other and figure out the direction that they want to go together.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Teal Business Structure Section End -->
<!-- Get in touch with us Section Start -->
<section class="get-in-sec-main" id="contactus?">
    <div class="container">
        <div class="get-in-inner">
            <div class="get-in-con-block">
                <div class="get-in-con-block-inner">
                    <div class="get-in-img-block">
                        <div class="get-in-img">
                            <!-- <img src="{{ asset('assets/front/img/get-int-touch-img.png')}}"> -->
                            <video width="800" height="896" autoplay muted loop id="contact-video-section" controls="">
                                <source src="{{ asset('assets/front/img/IMG_8878.mp4') }}" type="video/mp4" />
                            </video>
                        </div>
                        <div class="get-in-img-con-block">
                            <div class="custom-title">
                                <h2>Get in touch with us</h2>
                            </div>
                            @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{!! \Session::get('success') !!}</p>
                            </div>
                            @endif
                            <div class="get-in-form">
                                <form method="post" action="{{ route('contact-enquiry')}}">
                                    <div class="form-field">
                                        <input type="text" placeholder="Name" id="name" name="name" required>
                                    </div>
                                    <div class="form-field">
                                        <input type="text" placeholder="Phone Number" id="mobile" name="mobile" required>
                                    </div>
                                    <div class="form-field">
                                        <input type="email" placeholder="Email" id="email" name="email" required>
                                    </div>
                                    <div class="form-field">
                                        <textarea type="text" placeholder="Message" rows="5" id="message" name="message" required></textarea>
                                    </div>
                                    @csrf
                                    <div class="get-in-btn">
                                        <button type="submit">Contact Us <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1.32861L6 6.32861L1 11.3286" stroke="white" stroke-width="1.2" />
                                                <path d="M8 1.32861L13 6.32861L8 11.3286" stroke="white" stroke-width="1.2" />
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="get-in-contact-block">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="get-in-contact-box">
                                <div class="get-in-contact-icon">
                                    <svg width="45" height="46" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M26.25 25.7158H30.9375L32.8125 18.2158H26.25V14.4658C26.25 12.5346 26.25 10.7158 30 10.7158H32.8125V4.41582C32.2012 4.3352 29.8931 4.15332 27.4556 4.15332C22.365 4.15332 18.75 7.26019 18.75 12.9658V18.2158H13.125V25.7158H18.75V41.6533H26.25V25.7158Z" fill="#009798" />
                                    </svg>

                                </div>
                                <div class="get-in-contact-content">
                                    <a href="https://www.facebook.com/novaeo.co" target="_()">Connect With Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="get-in-contact-box">
                                <div class="get-in-contact-icon">
                                    <svg width="45" height="37" viewBox="0 0 45 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M45 10.7713V29.0908C45.0001 30.9586 44.2855 32.7557 43.0027 34.1133C41.72 35.471 39.9663 36.2863 38.1015 36.3921L37.6875 36.4033H7.3125C5.44469 36.4034 3.64764 35.6888 2.28998 34.4061C0.932325 33.1233 0.116997 31.3696 0.0112503 29.5048L0 29.0908V10.7713L21.717 22.1473C21.9586 22.2739 22.2273 22.34 22.5 22.34C22.7727 22.34 23.0414 22.2739 23.283 22.1473L45 10.7713ZM7.3125 0.40332H37.6875C39.5001 0.403102 41.2481 1.07606 42.5926 2.29167C43.9371 3.50728 44.7822 5.1789 44.964 6.98232L22.5 18.7498L0.0360001 6.98232C0.210428 5.25052 0.996862 3.63773 2.25394 2.43386C3.51101 1.22999 5.15628 0.513991 6.894 0.414571L7.3125 0.40332H37.6875H7.3125Z" fill="#009798" />
                                    </svg>


                                </div>
                                <div class="get-in-contact-content">
                                    <a href="mailto:hr@novaeo.com">hr@novaeo.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="get-in-contact-box">
                                <div class="get-in-contact-icon">
                                    <svg width="31" height="40" viewBox="0 0 31 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.5 0.21582C11.3989 0.220658 7.46721 1.85195 4.5673 4.75186C1.6674 7.65176 0.0361046 11.5835 0.0312665 15.6846C0.0263546 19.036 1.12108 22.2965 3.14752 24.9658C3.14752 24.9658 3.56939 25.5213 3.6383 25.6014L15.5 39.5908L27.3674 25.5944C27.4292 25.5199 27.8525 24.9658 27.8525 24.9658L27.8539 24.9616C29.8793 22.2934 30.9736 19.0344 30.9688 15.6846C30.9639 11.5835 29.3326 7.65176 26.4327 4.75186C23.5328 1.85195 19.6011 0.220658 15.5 0.21582ZM15.5 21.3096C14.3875 21.3096 13.3 20.9797 12.3749 20.3616C11.4499 19.7435 10.7289 18.865 10.3032 17.8372C9.87745 16.8093 9.76606 15.6783 9.9831 14.5872C10.2001 13.496 10.7359 12.4938 11.5225 11.7071C12.3092 10.9204 13.3115 10.3847 14.4026 10.1677C15.4938 9.95061 16.6248 10.062 17.6526 10.4877C18.6804 10.9135 19.5589 11.6345 20.177 12.5595C20.7951 13.4845 21.125 14.5721 21.125 15.6846C21.1232 17.1758 20.5299 18.6055 19.4754 19.66C18.4209 20.7145 16.9913 21.3077 15.5 21.3096Z" fill="#009798" />
                                    </svg>


                                </div>
                                <div class="get-in-contact-content">
                                    <a href="https://goo.gl/maps/1pgiqFbozgURn4LQ7" target="_()">8509 Benjamin Road,Suite H, Tampa, Florida, 33634</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Get in touch with us Section End -->


<!-- Map Section Start -->
<section class="map-sec-main">
    <div class="container">
        <div class="map-inner">
            <div class="map-con-block">
                <div class="custom-title">
                    <h2>Where we are</h2>
                </div>
                <div id="map"></div>
                <!-- <div class="map-img-block">
                    <img src="{{ asset('assets/front/img/map-img.png')}}">
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- Map Section End -->


@endsection
@section('scripts')
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkuoDAxYB0PMRtSivIx7MlfuKqAyGFHNg&callback=initMap">
</script>
<script>
    function initMap() {
        var center = {
            lat: 27.964157,
            lng: -82.452606
        };
        var locations = [
            ['8509 Benjamin Road<br>\
            Suite H, Tampa, Florida, 33634<br> \
   <a href="https://goo.gl/maps/vv6G2msZqsWzGSCf8">Get Directions</a>', 27.964157, -82.452606],
        ];
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 9,
            center: center
        });
        var infowindow = new google.maps.InfoWindow({});
        var marker, count;
        for (count = 0; count < locations.length; count++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[count][1], locations[count][2]),
                map: map,
                title: locations[count][0]
            });
            google.maps.event.addListener(marker, 'click', (function(marker, count) {
                return function() {
                    infowindow.setContent(locations[count][0]);
                    infowindow.open(map, marker);
                }
            })(marker, count));
        }
    }
</script>
@endsection