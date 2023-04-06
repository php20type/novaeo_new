@extends('layouts.app')

@section('content')
<!-- Banner Section Start -->
<section class="banner-sec">
    <div class="container-fluid">
        <div class="banner-con-inner">
            <div class="banner-con-block">
                <img src=" {{ asset('assets/front/img/visionary-bg-img.png')}}" />
                <div class="banner-content">
                    <h2>About</h2>
                    <div class="banner-menu-block">
                        <ul>
                            <li>
                                <a href="javascript:void(0)"> Home</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">About</a>
                            </li>
                        </ul>
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
                        <img src="{{ asset('assets/front/img/about-img.png')}}">
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
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

@endsection