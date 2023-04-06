@extends('layouts.app')

@section('content')
<!-- Banner Section Start -->
<section class="banner-sec careers-banner-sec">
    <div class="container-fluid">
        <div class="banner-con-inner">
            <div class="banner-con-block">
                <img src="{{ asset('assets/front/img/careers-bg-img.png')}}" />
                <div class="banner-content">
                    <h2>Careers</h2>
                    <div class="banner-menu-block">
                        <ul>
                            <li>
                                <a href="javascript:void(0)"> Home</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Careers</a>
                            </li>
                        </ul>
                    </div>
                    <div class="banner-box-block">
                        <div class="banner-box-block-inner">
                            <form method="get" action="{{ route('career')}}">
                                <div class="form-field">
                                    <input type="text" name="job_title" value="@if(isset($_REQUEST['job_title']) && $_REQUEST['job_title']!=''){{$_REQUEST['job_title']}} @endif" placeholder="Job Title or Keywords" />
                                </div>
                                <div class="form-field">
                                    <select name="location">
                                        <option value="">--Select City--</option>
                                        @foreach($cities as $city)
                                        <option value="{{ $city->location}}" @if(isset($_REQUEST['location']) && $_REQUEST['location']==$city->location) selected @endif>{{ $city->location}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="banner-search-icon">
                                    <button type="submit" class="search-btn"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.0086 13.2075H14.06L13.7238 12.8834C14.9412 11.4714 15.6102 9.66876 15.6089 7.80446C15.6089 6.26089 15.1512 4.75197 14.2936 3.46854C13.4361 2.1851 12.2172 1.18478 10.7911 0.594083C9.36502 0.00338155 7.7958 -0.151173 6.28189 0.149964C4.76797 0.451101 3.37735 1.1944 2.28588 2.28588C1.1944 3.37735 0.451101 4.76797 0.149964 6.28189C-0.151173 7.7958 0.00338155 9.36502 0.594083 10.7911C1.18478 12.2172 2.1851 13.4361 3.46854 14.2936C4.75197 15.1512 6.26089 15.6089 7.80446 15.6089C9.73757 15.6089 11.5146 14.9005 12.8834 13.7238L13.2075 14.06V15.0086L19.211 21L21 19.211L15.0086 13.2075ZM7.80446 13.2075C4.81475 13.2075 2.40138 10.7942 2.40138 7.80446C2.40138 4.81475 4.81475 2.40138 7.80446 2.40138C10.7942 2.40138 13.2075 4.81475 13.2075 7.80446C13.2075 10.7942 10.7942 13.2075 7.80446 13.2075Z" fill="white" />
                                        </svg>
                                        <span>Search</span>
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->
<!-- Open Position Section Start -->
<section class="position-sec-main">
    <div class="container">
        <div class="position-inner">
            <div class="position-box">
                <div class="row">
                    @if(count($jobposts)>0)
                    @foreach($jobposts as $job)
                    <div class="col-md-6">

                        <div class="position-box-content">
                            <div class="position-time-block">
                                <p>{{ $job->employment_type}}</p>
                                <h5>{{ $job->title}}</h5>
                                <div class="position-list-block">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('assets/front/img/position-cart-icon.svg')}}" />
                                                {{ $job->experience}}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('assets/front/img/position-map-icon.svg')}}" />
                                                {{ $job->location}}
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="position-apply-btn">
                                        <a href="javascript:void(0)" onclick="jobDetail(`{{$job->title}}`,`{{$job->specification}}`,`{{$job->work_place}}`,`{{$job->experience}}`,`{{$job->schedule}}`,`{{$job->skill1}}`,`{{$job->skill2}}`,`{{$job->skill3}}`,`{{$job->employment_type}}`,`{{ encrypt($job->id)}}`)">View Details</a>
                                        @if(!empty(Auth::user()))
                                        @if(empty($job->candidate_id))
                                        <a href="javascript:void(0)" onclick="applyJob({{$job->id}})">Apply Now</a>
                                        @else
                                        <span class="applied-span"> Applied</span>
                                        @endif
                                        @else
                                        <a href="{{route('login')}}">Apply Now</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-md-12 pb-5 pt-5 mb-5">
                        <div class="text-center">
                            <h1>No Record Found</h1>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog apply-candidate-popup">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- <div class="col-md-6"> -->
                    <div class="popup-con-block">
                        <h2>Apply Now</h2>
                        <div class="popup-box">
                            <form method="post" enctype="multipart/form-data" action="{{ route('apply-job')}}">

                                <div class="row">
                                    <div class="col-md-6 form-field">
                                        <label>Name *</label>
                                        <input type="text" placeholder="" name="name" id="name" required />
                                    </div>
                                    <div class="col-md-6 form-field">
                                        <label>Contact number *</label>
                                        <input type="tel" placeholder="" name="mobile" id="mobile" required />
                                    </div>
                                    <div class="col-md-6 form-field">
                                        <label>Email *</label>
                                        <input type="email" placeholder="xyz@gmail.com" name="email" id="email" required />
                                    </div>
                                    <div class="col-md-6 form-field">
                                        <label>Country *</label>
                                        <input type="text" placeholder="United State" name="country" id="country" required />
                                    </div>

                                    <div class="col-md-6 form-field">
                                        <label>Online jobs/Indeed/Upwork Profile
                                            Link
                                        </label>
                                        <input type="url" placeholder="" id="profile_link" name="profile_link" />
                                    </div>
                                    <div class="col-md-6 form-field">
                                        <label>Experience *</label>
                                        <select name="experience" id="experience" required>
                                            <option value="Less than 1 year">Less than 1 year</option>
                                            <option value="1 year">1 year</option>
                                            <option value="2 years">2 years</option>
                                            <option value="3 years">3 years</option>
                                            <option value="4 years">4 years</option>
                                            <option value="5 years">5 years</option>
                                            <option value="more than 5 years">more than 5 years</option>
                                        </select>
                                    </div>
                                    <div class="clear-fix"></div>
                                    <div class="col-md-4 form-field">
                                        <label>Upload Resume *</label>
                                        <input type="file" placeholder="" name="resume" id="resume" accept="application/pdf" required />
                                    </div>
                                    <div class="col-md-4 form-field">
                                        <label>Upload Portfolio</label>
                                        <input type="file" placeholder="" name="portfolio" id="portfolio" accept="application/pdf" />
                                    </div>
                                    <div class="col-md-4 form-field">
                                        <label>Upload Profile Picture</label>
                                        <input type="file" placeholder="" name="profile" id="profile" accept="image/*" required />
                                    </div>

                                    <div class="question_list row"></div>

                                </div>
                                @csrf
                                <input type="hidden" name="job_id" id="job_id">
                                <button type="submit" class="btn btn-block btn-primary candidate-submit-btn">Submit</button>
                            </form>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="col-md-6">
                        <div class="apply-img-block">
                            <img src="{{ asset('assets/front/img/apply-now-img.png')}}" />
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

    </div>
</div>
<div id="messageModal" class="modal fade" role="dialog">
    <div class="modal-dialog apply-candidate-popup">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- <div class="col-md-6"> -->
                    <div class="popup-con-block">
                        <div class="alert alert-warning">
                            <h4>You Have Already Applied For this Job !!!</h4>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="col-md-6">
                        <div class="apply-img-block">
                            <img src="{{ asset('assets/front/img/apply-now-img.png')}}" />
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

    </div>
</div>
<div id="detailModal" class="modal fade" role="dialog">
    <div class="modal-dialog apply-candidate-popup">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- <div class="col-md-6"> -->
                    <div class="popup-con-block">
                        <h2 id="job_title"></h2>
                        <div class="popup-box">
                            <div class="row">
                                <div class="col-md-12 job-detail-page">
                                    <h4>Job Specification</h4>
                                    <p id="job_specification"></p>
                                </div>
                                <div class="col-md-6 job-detail-page">
                                    <h4>Experience</h4>
                                    <p id="job_experience"></p>
                                </div>
                                <div class="col-md-6 job-detail-page">
                                    <h4>Workplace type</h4>
                                    <p id="workplace_type"></p>
                                </div>
                                <div class="col-md-6 job-detail-page">
                                    <h4>Type of employment</h4>
                                    <p id="employment_type"></p>
                                </div>
                                <div class="col-md-6 job-detail-page">
                                    <h4>Schedule</h4>
                                    <p id="schedule"></p>
                                </div>
                                <div class="col-md-6 job-detail-page">
                                    <h4>Skills Needed</h4>
                                    <p id="skills" class="d-flex"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="col-md-6">
                        <div class="apply-img-block">
                            <img src="{{ asset('assets/front/img/apply-now-img.png')}}" />
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Single Person Slider Section Start -->
<section class="person-sec-main">
    <div class="container">
        <div class="person-inner">
            <div class="person-slider">
                <div class="person-slide">
                    <div class="person-slide-block">
                        <div class="person-img-block">
                            <div class="person-img">
                                <img src="{{ asset('assets/front/img/team-img-3.png')}}" />
                            </div>
                        </div>
                        <div class="person-con-block">
                            <p>
                                "I love working in an international setting with smart individuals that challenge me to do my best everyday. Also the overall vibe and wellness approach of the company opened my eyes to do a better job at being healthy, have more life balance and to live my life to its full potential."
                            </p>
                            <h4>Daniel Blancarte</h4>
                            <h5>Supply Chain Manager</h5>
                            <h5><b>Mexico</b></h5>

                        </div>
                    </div>
                </div>
                <div class="person-slide">
                    <div class="person-slide-block">
                        <div class="person-img-block">
                            <div class="person-img">
                                <img src="{{ asset('assets/front/img/team-img-27.png')}}" />
                            </div>
                        </div>
                        <div class="person-con-block">
                            <p>
                                "I really like working in Novaeo. All the members are very supportive and they guide me very well every time I'm stuck at figuring out something. Learning with the team is the best part of Novaeo. We all learn new things together and suggestions are welcomed here so every member loves to share his/her thoughts."
                            </p>
                            <h4>Akash Asodariya</h4>
                            <h5>Full Stack Developer</h5>
                            <h5><b>India</b></h5>

                        </div>
                    </div>
                </div>
                <div class="person-slide">
                    <div class="person-slide-block">
                        <div class="person-img-block">
                            <div class="person-img">
                                <img src="{{ asset('assets/front/img/team-img-39.png')}}" />
                            </div>
                        </div>
                        <div class="person-con-block">
                            <p>
                                "I love working here in Novaeo because of the flexibility in its working environment, which allows me to take care of my family. It also gave me the opportunity to meet amazing people who have become really good friends. I also learned a lot while working here, something that I know I would not have the chance to handle or learn in a corporate setting."
                            </p>
                            <h4>Blez Reillo</h4>
                            <h5>Accounting and Finance Specialist</h5>
                            <h5><b>Philippines</b></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Single Person Slider Section End -->
<!-- Culture Section Start -->
<section class="culture-sec-main">
    <div class="container">
        <div class="culture-inner">
            <div class="custom-title">
                <h2>What’s it like working in Novaeo</h2>
            </div>
            <div class="culture-con-block">
                <div class="culture-title">
                    <h3>Our Culture</h3>
                    <div class="culture-img">
                        <img src="{{ asset('assets/front/img/culture-img.png')}}" />
                    </div>
                    <p>
                        Novaeo is a remote first work set up, and on top of that we have
                        this eye-catching line “work anytime and anywhere”, be it in the
                        garage, beachfront, park, cafe, even in your friend’s birthday
                        party as long as there is internet connectivity! With this work
                        set up, we are able to achieve our goal: members maintaining a
                        work-life balance.
                    </p>
                    <p>
                        In order to recreate the office set-up we have a 2 hour blocked
                        time for what we call “Pod Party” and we do it in Tandem. During
                        Pod Parties, we talk about work, we chit chat about our personal
                        stories, we laugh and we see each other’s faces just like in a
                        real workplace.
                    </p>
                    <p>
                        We have a timetracker but time logs are for record only and
                        basis for salary, but here in Novaeo we don’t really measure
                        time, we measure results! Being responsive is one of our values,
                        since we are in a remote set-up we see to it that we respond to
                        queries, requests and taskings in all our communication channels
                        within 24 hours. That’s our golden rule!
                        <br />
                        We measure results and the value created, how do we do that? We
                        submit weekly loom reports every monday about our previous
                        week’s tasks and the coming week’s goals. We do it in no boring
                        way, and just merely talking about stuff, we do it with
                        creativity and with our weekly theme such as “reporting while
                        wearing accessories, having funny face tattoos, wearing
                        halloween costumes, etc.).
                    </p>
                    <p>
                        We find ways to have fun, even when we don’t really see each
                        other face to face. We have channels in our Slack Platform that
                        are meant for sending memes, for sending the best netflix movies
                        and for joining weekly<br />challenges like “send the funniest
                        meme, send a funny screenshot of your teammate during pod party,
                        send the cutest photo of your pet and so many more challenges to
                        mention. The good thing is that we get prizes for these so
                        everybody is very eager to join.
                    </p>
                    <p>
                        We highly value self-management and growth and totally hate
                        micromanagement! We don’t believe in hierarchy so everyone gets
                        to lead and support projects. If you think of something amazing
                        that will definitely contribute to Novaeo, you have the autonomy
                        to start, do and apply that awesome idea!
                    </p>
                    <p>
                        We promote good-health! As much as possible we don’t want
                        members to work on a night shift. We want our members to
                        prioritize health above work. Here’s the exciting part, we have
                        health and fitness challenges for our members, like giving them
                        goals to achieve an average 8,000 steps per month, and of course
                        achieved goals are always rewarded. It’s a double win! Members
                        get to be fit and they also receive $50 as a reward. A lot of
                        health related perks are still coming in, and members will have
                        no other choice but to stay healthy and fit! Isn’t that amazing?
                    </p>
                    <p>
                        Novaeo has so much to offer, we have the best culture and the
                        best people! Don’t you want to be part of that? We want you!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Culture Section End -->
<!-- Our Perks Section Start -->
<section class="perks-sec-main">
    <div class="container">
        <div class="perks-inner">
            <div class="perks-con-block">
                <div class="perks-title">
                    <h3>Our perks</h3>
                </div>
                <div class="perks-box-block">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-1.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Flexible work hours</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-2.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Work anytime, anywhere!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-3.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Birthday bonus</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-4.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Netflix Access</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-5.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Tax Free Pay!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-6.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Weekly pay-out</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-7.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Pay raise!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-8.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Team Travel</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-9.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Internet Allowance</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-10.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Free products</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-11.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Health Insurance</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-12.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Health Club Stipend</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-13.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Healthy Meal Delivery</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-14.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Health and Fitness Coach</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-15.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Psychologist/ Wellness Counselor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-16.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Equipment Stipend</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-17.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Profit Share</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-18.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Crypto Investment</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-19.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Skill Development Bonus</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="perks-box">
                                <div class="perks-box-img">
                                    <img src="{{ asset('assets/front/img/perks-icon-20.svg')}}" />
                                </div>
                                <div class="perks-box-content">
                                    <p>Fitness Stipend (Gym membership)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="perks-box-btn">
                        <a href="javascript:void(0)">Show More
                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1.32861L6 6.32861L1 11.3286" stroke="white" stroke-width="1.2"></path>
                                <path d="M8 1.32861L13 6.32861L8 11.3286" stroke="white" stroke-width="1.2"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Perks Section End -->
<!-- How We Hire Section Start -->
<section class="hire-sec-main" id="how-we-hire?">
    <div class="container">
        <div class="hire-inner">
            <div class="custom-title">
                <h2>How We Hire.</h2>
            </div>
            <div class="hire-con-block">
                <div class="hire-content-odd">
                    <div class="hire-number-title">
                        <h4>01</h4>
                    </div>
                    <div class="hire-number-content">
                        <div class="hire-content">
                            <p>
                                We post our Job Ads in different platforms such as Online
                                jobs, Indeed, Upwork and here in our website. All our Job
                                Ads must be read from the beginning to the end so that you
                                as a jobseeker will have a deeper understanding of what we
                                want from you and what we can offer in return. The initial
                                questions form part of the job ad and we know that you’ve
                                read the entire job ad when you answered the initial
                                questions.
                            </p>
                            <div class="hire-number">01</div>
                        </div>
                    </div>
                </div>
                <div class="hire-content-even">
                    <div class="hire-number-title">
                        <h4>02</h4>
                    </div>
                    <div class="hire-number-content">
                        <div class="hire-content">
                            <p>
                                Harmony(HR) will review your resume, portfolio (if
                                applicable), profile and of course your responses to the
                                initial questions. If you meet our qualifications, you will
                                proceed to the next step and an email will be sent to you
                                and you will be asked to answer the Round 1 questions. The
                                questions are usually 1-10 or more questions that will let
                                us know your skills and qualifications even more
                            </p>
                            <div class="hire-number">02</div>
                        </div>
                    </div>
                </div>
                <div class="hire-content-odd">
                    <div class="hire-number-title">
                        <h4>03</h4>
                    </div>
                    <div class="hire-number-content">
                        <div class="hire-content">
                            <p>
                                After carefully assessing your responses and if we think you
                                have the skills and experience that we need, you will then
                                advance to Round 2. In this round, you will be asked to
                                complete a skill test and/or do a selfie video and/or attend
                                an online interview. You may be asked to do a few more skill
                                tests or interviews after this, depending on the role.
                            </p>
                            <div class="hire-number">03</div>
                        </div>
                    </div>
                </div>
                <div class="hire-content-even">
                    <div class="hire-number-title">
                        <h4>04</h4>
                    </div>
                    <div class="hire-number-content">
                        <div class="hire-content">
                            <p>
                                After reviewing your skill tests, selfie video and your
                                performance during the interview and if we think you are the
                                best fit for the role, you will then be informed via email
                                and you will also be asked to provide the email addresses of
                                at least 2 of your previous employers for us to verify your
                                employment
                            </p>
                            <div class="hire-number">04</div>
                        </div>
                    </div>
                </div>
                <div class="hire-content-odd">
                    <div class="hire-number-title">
                        <h4>05</h4>
                    </div>
                    <div class="hire-number-content">
                        <div class="hire-content">
                            <p>
                                Once your employment has been verified, the Job Offer will
                                be sent.
                            </p>
                            <div class="hire-number">05</div>
                        </div>
                    </div>
                </div>
                <div class="hire-content-even">
                    <div class="hire-number-title">
                        <h4>06</h4>
                    </div>
                    <div class="hire-number-content">
                        <div class="hire-content">
                            <p>
                                After you accept the Job Offer, the onboarding process will
                                follow.
                            </p>
                            <div class="hire-number">06</div>
                        </div>
                    </div>
                </div>
                <div class="hire-content-odd">
                    <div class="hire-number-title">
                        <h4>07</h4>
                    </div>
                    <div class="hire-number-content">
                        <div class="hire-content">
                            <p>Welcome aboard!</p>
                            <div class="hire-number">07</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How We Hire Section End -->

@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        var job_filter_id = '{{$id}}';
        var candidatejob = {!! $candidatejob !!};
        console.log(candidatejob);
        if (job_filter_id != '' && job_filter_id != null) {
                jobDetail(candidatejob.title,candidatejob.specification,candidatejob.work_place,candidatejob.experience,candidatejob.schedule,candidatejob.skill1,candidatejob.skill2,candidatejob.skill3,candidatejob.employment_type,job_filter_id);
        }
    })

    function applyJob(id) {
        $('#job_id').val(id);
        var html = '';
        $.ajax({
            url: "{{ route('job-questions')}}",
            data: {
                job_id: id
            },
            success: function(result) {
                $.each(result, function(key, value) {
                    html += '<div class="col-md-4 form-field">' + '<label>' + value.question + '</label>' + '<input type="text" name="question_' + value.id + '" id="question3_' + value.id + '"></div>';
                })
                $('.question_list').html(html);
            }
        });
        $('#myModal').modal('show');
    }

    function jobDetail(title, specification, work_place, experience, schedule, skill1, skill2, skill3, employment_type, id) {
        var url = "{{route('career')}}" + '?id=' + id;
        var title_msg = title + '<a class="btn btn-primary ms-2 copy-btn" onclick="copyContent(this)" data-url="' + url + '">Copy Link</a>';
        $('#job_title').html(title_msg);
        $('#job_specification').text(specification);
        $('#job_experience').text(experience);
        $('#workplace_type').text(work_place);
        $('#schedule').text(schedule);
        var skills = '';
        if (skill1 != '' && skill1 != null) {
            skills += '<li><a>' + skill1 + '</a></li>';
        }
        if (skill2 != '' && skill2 != null) {
            skills += '<li><a>' + skill2 + '</a></li>';
        }
        if (skill3 != '' && skill3 != null) {
            skills += '<li><a>' + skill3 + '</a></li>';
        }
        $('#skills').html(skills);
        $('#employment_type').text(employment_type);
        $('#detailModal').modal('show');

    }

    function copyContent(obj) {
        $(obj).attr('title', 'Copy');
        $(obj).attr('data-bs-original-title', 'Copy');
        $('.copy-btn').tooltip();
        // Select the content to copy
        var content = $(obj).data('url'); // Get the value of data-content attribute
        var temp = $('<textarea>'); // Create a temporary textarea element
        $('body').append(temp); // Add it to the DOM
        temp.val(content).select(); // Set its value and select its text
        document.execCommand('copy'); // Copy the selected text
        temp.remove(); // Remove the temporary element
        $(obj).attr('title', 'Copied');
        $(obj).attr('data-bs-original-title', 'Copied');

        // Show the tooltip
        $(obj).tooltip('show');

        // Hide the tooltip after 1 second
        setTimeout(function() {
            $('.copy-btn').tooltip('hide');
            $(obj).attr('title', 'Copy');
            $(obj).attr('data-bs-original-title', 'Copy');
        }, 1000);

        // Deselect the content
        window.getSelection().removeAllRanges();

    }
</script>
@endsection