@extends('layouts.app')

@section('content')
<!-- Banner Section Start -->
<section class="banner-sec">
    <div class="container-fluid">
        <div class="banner-con-inner">
            <div class="banner-con-block">
                <img src="{{ asset('assets/front/img/careers-bg-img.png')}}" />
                <div class="banner-content">
                    <h2>Apply Now</h2>
                    <div class="banner-menu-block">
                        <ul>
                            <li>
                                <a href="javascript:void(0)"> Home</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Apply Now</a>
                            </li>
                        </ul>
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
            <div class="custom-title">
                <h2>Open Position</h2>
            </div>
            <div class="position-con-block">
                <div class="position-box-block">
                    <div class="position-box-block-inner">
                        <form method="get" action="{{ route('apply-now')}}">
                            <div class="form-field">
                                <input type="text" name="job_title" value="{{$job_title}}" placeholder="Job Title or Keywords" />
                            </div>
                            <div class="form-field">
                                <select name="location">
                                    @foreach($cities as $city)
                                    <option value="{{ $city->location}}" @if($location==$city->location) selected @endif>{{ $city->location}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="position-search-icon">
                                <button type="submit" class="search-btn"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.0086 13.2075H14.06L13.7238 12.8834C14.9412 11.4714 15.6102 9.66876 15.6089 7.80446C15.6089 6.26089 15.1512 4.75197 14.2936 3.46854C13.4361 2.1851 12.2172 1.18478 10.7911 0.594083C9.36502 0.00338155 7.7958 -0.151173 6.28189 0.149964C4.76797 0.451101 3.37735 1.1944 2.28588 2.28588C1.1944 3.37735 0.451101 4.76797 0.149964 6.28189C-0.151173 7.7958 0.00338155 9.36502 0.594083 10.7911C1.18478 12.2172 2.1851 13.4361 3.46854 14.2936C4.75197 15.1512 6.26089 15.6089 7.80446 15.6089C9.73757 15.6089 11.5146 14.9005 12.8834 13.7238L13.2075 14.06V15.0086L19.211 21L21 19.211L15.0086 13.2075ZM7.80446 13.2075C4.81475 13.2075 2.40138 10.7942 2.40138 7.80446C2.40138 4.81475 4.81475 2.40138 7.80446 2.40138C10.7942 2.40138 13.2075 4.81475 13.2075 7.80446C13.2075 10.7942 10.7942 13.2075 7.80446 13.2075Z" fill="white" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="position-box">
                <div class="row">
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
                                        @if(!empty(Auth::user()))
                                        <a href="javascript:void(0)" onclick="applyJob({{$job->id}})">Apply Now</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                                        <label>Country</label>
                                        <input type="text" placeholder="United State" name="country" id="country" />
                                    </div>

                                    <div class="col-md-6 form-field">
                                        <label>Online jobs/Indeed/Upwork Profile
                                            Link
                                        </label>
                                        <input type="url" placeholder="" id="profile_link" name="profile_link" />
                                    </div>
                                    <div class="col-md-4 form-field">
                                        <label>Upload Resume *</label>
                                        <input type="file" placeholder="" name="resume" id="resume" required />
                                    </div>
                                    <div class="col-md-4 form-field">
                                        <label>Upload Portfolio</label>
                                        <input type="file" placeholder="" name="portfolio" id="portfolio" />
                                    </div>
                                    <div class="col-md-4 form-field">
                                        <label>Upload Profile Picture</label>
                                        <input type="file" placeholder="" name="profile" id="profile" />
                                    </div>
                                    <div class="col-md-6 form-field">
                                        <label>Experience</label>
                                        <select name="experience" id="experience">
                                            <option value="Less than 1 year">Less than 1 year</option>
                                            <option value="1 year">1 year</option>
                                            <option value="2 years">2 years</option>
                                            <option value="3 years">3 years</option>
                                            <option value="4 years">4 years</option>
                                            <option value="5 years">5 years</option>
                                            <option value="more than 5 years">more than 5 years</option>
                                        </select>
                                    </div>
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

@endsection
@section('scripts')
<script>
    function applyJob(id) {
        $('#job_id').val(id);
        var html='';
        $.ajax({
            url: "{{ route('job-questions')}}",
            data:{
                job_id:id
            },
            success: function(result) {
                $.each(result,function (key,value){
                        
                })
            }
        });
        $('#myModal').modal('show');
    }
</script>
@endsection