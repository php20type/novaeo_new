@extends('layouts.app')

@section('content')
<!-- Banner Section Start -->
<section class="banner-sec">
    <div class="container-fluid">
        <div class="banner-con-inner">
            <div class="banner-con-block">
                <img src="{{ asset('assets/front/img/our-team-bg-img.png')}}" />
                <div class="banner-content">
                    <h2>Our Team</h2>
                    <div class="banner-menu-block">
                        <ul>
                            <li>
                                <a href="javascript:void(0)"> Home</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Our Team</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->
<!-- Our Team Section Start -->
<section class="team-sec-main">
    <div class="container">
        @if(isset($team['ceo']))
        <div class="team-con-box-block">
            <div class="custom-title">
                <h2>Meet Our Team</h2>
                <!-- <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Praesent at urna vitae justo bibendum tempus nec ac nisl.
                Vivamus venenatis nunc eu nunc viverra, at pellentesque ipsum
                dignissim.
              </p> -->
            </div>
            <div class="team-box-block">
                <div class="row">

                    @foreach($team['ceo'] as $post)
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('uploads/team') . '/' . $post->profile }}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>{{ $post->name}}</h3>
                                <p>{{ $post->designation}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        @if(isset($team['supply-chain']))
        <div class="team-con-box-block">
            <div class="custom-title">
                <h2>Supply Chain</h2>
            </div>
            <div class="team-box-block">
                <div class="row">
                    @foreach($team['supply-chain'] as $post)
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('uploads/team') . '/' . $post->profile }}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>{{ $post->name}}</h3>
                                <p>{{ $post->designation}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        @if(isset($team['product-development']))
        <div class="team-con-box-block">
            <div class="custom-title">
                <h2>Product Development</h2>
            </div>
            <div class="team-box-block">
                <div class="row">
                    @foreach($team['product-development'] as $post)
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('uploads/team') . '/' . $post->profile }}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>{{ $post->name}}</h3>
                                <p>{{ $post->designation}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        @endif
        @if(isset($team['amazon-pmps']))

        <div class="team-con-box-block">
            <div class="custom-title">
                <h2>Amazon & Pmps</h2>
            </div>
            <div class="team-box-block">
                <div class="row">
                    @foreach($team['amazon-pmps'] as $post)
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('uploads/team') . '/' . $post->profile }}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>{{ $post->name}}</h3>
                                <p>{{ $post->designation}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        @if(isset($team['creatives']))
        <div class="team-con-box-block">
            <div class="custom-title">
                <h2>Creatives</h2>
            </div>
            <div class="team-box-block">
                <div class="row">
                    @foreach($team['creatives'] as $post)
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('uploads/team') . '/' . $post->profile }}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>{{ $post->name}}</h3>
                                <p>{{ $post->designation}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        @if(isset($team['content-copy']))
        <div class="team-con-box-block">
            <div class="team-custom-title">
                <h3>Content & Copy</h3>
            </div>
            <div class="team-box-block">
                <div class="row">
                    @foreach($team['content-copy'] as $post)
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('uploads/team') . '/' . $post->profile }}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>{{ $post->name}}</h3>
                                <p>{{ $post->designation}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        @if(isset($team['graphic-designer']))
        <div class="team-con-box-block">
            <div class="team-custom-title">
                <h3>Graphic Designer</h3>
            </div>
            <div class="team-box-block">
                <div class="row">
                    @foreach($team['graphic-designer'] as $post)
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('uploads/team') . '/' . $post->profile }}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>{{ $post->name}}</h3>
                                <p>{{ $post->designation}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        @if(isset($team['web-tech']))
        <div class="team-con-box-block">
            <div class="custom-title">
                <h2>Web & Tech</h2>
            </div>
            <div class="team-box-block">
                <div class="row">
                    @foreach($team['web-tech'] as $post)
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('uploads/team') . '/' . $post->profile }}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>{{ $post->name}}</h3>
                                <p>{{ $post->designation}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        @if(isset($team['social-media-outreach']))
        <div class="team-con-box-block">
            <div class="custom-title">
                <h2>Social Media & Outreach</h2>
            </div>
            <div class="team-box-block">
                <div class="row">
                    @foreach($team['social-media-outreach'] as $post)
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('uploads/team') . '/' . $post->profile }}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>{{ $post->name}}</h3>
                                <p>{{ $post->designation}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        @if(isset($team['customer-engagement']))
        <div class="team-con-box-block">
            <div class="custom-title">
                <h2>Customer Engagement</h2>
            </div>
            <div class="team-box-block">
                <div class="row">
                    @foreach($team['customer-engagement'] as $post)
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('uploads/team') . '/' . $post->profile }}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>{{ $post->name}}</h3>
                                <p>{{ $post->designation}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        @if(isset($team['indea-team']))
        <div class="team-con-box-block">
            <div class="custom-title">
                <h2>India Team</h2>
            </div>
            <div class="team-box-block">
                <div class="row">
                    @foreach($team['indea-team'] as $post)
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('uploads/team') . '/' . $post->profile }}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>{{ $post->name}}</h3>
                                <p>{{ $post->designation}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        @if(isset($team['internal-hr']))
        <div class="team-con-box-block">
            <div class="custom-title">
                <h2>Internal Operations</h2>
            </div>
            <div class="team-custom-title">
                <h3>HR</h3>
            </div>
            <div class="team-box-block">
                <div class="row">
                    @foreach($team['internal-hr'] as $post)
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('uploads/team') . '/' . $post->profile }}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>{{ $post->name}}</h3>
                                <p>{{ $post->designation}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        @if(isset($team['internal-finance']))
        <div class="team-con-box-block">
            <div class="team-custom-title">
                <h3>Finance</h3>
            </div>
            <div class="team-box-block">
                <div class="row">
                    @foreach($team['internal-finance'] as $post)
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('uploads/team') . '/' . $post->profile }}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>{{ $post->name}}</h3>
                                <p>{{ $post->designation}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        @if(isset($team['internal-admin']))
        <div class="team-con-box-block">
            <div class="team-custom-title">
                <h3>Legal & Admin</h3>
            </div>
            <div class="team-box-block">
                <div class="row">
                    @foreach($team['internal-admin'] as $post)
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('uploads/team') . '/' . $post->profile }}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>{{ $post->name}}</h3>
                                <p>{{ $post->designation}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        @endif
    </div>
</section>
<!-- Our Team Section End -->
@endsection