@extends('admin.layouts.app')

@section('title', 'Job Details')

@section('content')

<div class="dash-content-area-sec">
    <div class="mobile-toogle">
        <div class="menu-icon" id="menu-Toggle">
            <a href="#"><img src="{{ asset('assets/admin/img/home/menu.png') }}" /></a>
        </div>
        <div class="mobile-logo">
            <img src="{{ asset('assets/admin/img/logo/main.svg') }}" />
        </div>
    </div>

    <div class="dashboard-header-main-sec">
        <div class="row">
            <div class="col-lg-3">
                <div class="left-title-fix">
                    <h4>Recruiters</h4>
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
                                <a href="javascript:void(0)">Recruiters</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('admin/include/header')

        </div>
    </div>
    @php
    if ($recruter->upload_file != '' && $recruter->upload_file != null) {
    $image_file = asset('uploads/img') . '/' . $recruter->upload_file;
    } else {
    $image_file = asset('assets/front/img/dummy.png');
    }
    @endphp
    <div class="single-recruiter-sec-main">
        <div class="single-recruiter-inner">
            <div class="single-recruiter-box-block">
                <div class="single-recruiter-detail-block">
                    <div class="single-recruiter-box-img">
                        <img src="{{ $image_file }}" />
                    </div>
                    <div class="single-recruiter-detail-content">
                        <div class="d-flex justify-content-between">
                            <div class="single-recruiter-btn">
                                <a href="javascript:void(0)">{{ $recruter->employment_type }}</a>
                                @if($recruter->status==1)
                                <a class="badge-primary ms-2">Active</a>
                                @elseif($recruter->status==2)
                                <a class="badge-warning ms-2">Paused</a>
                                @else
                                <a class="badge-danger ms-2">Archived</a>
                                @endif
                            </div>

                        </div>
                        <h5>{{ $recruter->title }}</h5>

                        <!-- <div class="single-recruiter-rating-list">
                                <ul>
                                    <li>
                                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.8915 0L8.41429 4.49139H13.3421L9.35542 7.26722L10.8782 11.7586L6.8915 8.98278L2.90478 11.7586L4.42757 7.26722L0.440851 4.49139H5.3687L6.8915 0Z" fill="#FC8728" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.8915 0L8.41429 4.49139H13.3421L9.35542 7.26722L10.8782 11.7586L6.8915 8.98278L2.90478 11.7586L4.42757 7.26722L0.440851 4.49139H5.3687L6.8915 0Z" fill="#FC8728" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.8915 0L8.41429 4.49139H13.3421L9.35542 7.26722L10.8782 11.7586L6.8915 8.98278L2.90478 11.7586L4.42757 7.26722L0.440851 4.49139H5.3687L6.8915 0Z" fill="#FC8728" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.8915 0L8.41429 4.49139H13.3421L9.35542 7.26722L10.8782 11.7586L6.8915 8.98278L2.90478 11.7586L4.42757 7.26722L0.440851 4.49139H5.3687L6.8915 0Z" fill="#FC8728" />
                                        </svg>
                                    </li>
                                    <li>
                                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.8915 0L8.41429 4.49139H13.3421L9.35542 7.26722L10.8782 11.7586L6.8915 8.98278L2.90478 11.7586L4.42757 7.26722L0.440851 4.49139H5.3687L6.8915 0Z" fill="#FC8728" />
                                        </svg>
                                    </li>
                                </ul>
                                (66)
                            </div> -->
                        <h4>{{ $recruter->location }}</h4>
                        <p><span>{{ $recruter->salary }}</span></p>
                        <div class="single-recruiter-add-btn">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal">Edit Now</a>

                        </div>
                    </div>
                </div>
                <div class="single-recruiter-con-block">
                    <div class="single-recruiter-box-content">
                        <h3>Job Specification</h3>
                        <p>
                            {{ $recruter->specification }}
                        </p>
                    </div>
                    <div class="single-recruiter-box-content">
                        <h3>Experience</h3>
                        <p>{{ $recruter->experience }}</p>
                    </div>
                    <div class="single-recruiter-box-content">
                        <h3>Workplace type</h3>
                        <p>{{ $recruter->work_place }}</p>
                    </div>
                    <div class="single-recruiter-box-content">
                        <h3>Type of employment</h3>
                        <p>{{ $recruter->employment_type }}</p>
                    </div>
                    <div class="single-recruiter-box-content">
                        <h3>Schedule</h3>
                        <p>{{ $recruter->schedule }}</p>
                    </div>
                    <div class="single-recruiter-box-content">
                        <h3>Skills Needed</h3>
                        <ul>
                            @if ($recruter->skill1 != '' && $recruter->skill1 != null)
                            <li>
                                <a href="javascript:void(0)">{{ $recruter->skill1 }}</a>
                            </li>
                            @endif
                            @if ($recruter->skill2 != '' && $recruter->skill2 != null)
                            <li>
                                <a href="javascript:void(0)">{{ $recruter->skill2 }}</a>
                            </li>
                            @endif
                            @if ($recruter->skill3 != '' && $recruter->skill3 != null)
                            <li>
                                <a href="javascript:void(0)">{{ $recruter->skill3 }}</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                    <div class="single-recruiter-box-content">
                        <h3>Applications Questions: </h3>
                        @if ($recruterjobQuestions != '' && $recruterjobQuestions != null)
                        @foreach ($recruterjobQuestions as $item)
                        <li>
                            <a href="javascript:void(0)">
                                {!! nl2br($item->question) !!}
                            </a>
                        </li>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog job-edit-popup">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h2></h2>
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="recruiter-popup-sec-main">
                    <div class="recruiter-popup-title">
                        <h2>Update Information</h2>
                        <div class="popup-title-divider"></div>
                        <p>
                            Fusce eu mi vel purus dictum viverra. Cras ipsum
                            ante, imperdiet id odio nec.
                        </p>
                    </div>
                    <div class="popup-con-block">
                        <div class="popup-box">
                            <form method="post" action="{{ route('admin.recruter.update') }}">
                                <div class="form-field">
                                    <label>Job Specification</label>
                                    <textarea name="specification" id="specification">{{ $recruter->specification }}</textarea>
                                </div>
                                <div class="form-field">
                                    <label>Experience</label>
                                    <select name="experience" id="experience">
                                        <option value="Less than 1 year" @if ($recruter->experience == 'Less than 1 year') selected @endif>Less than 1 year</option>
                                        <option value="1 year" @if ($recruter->experience == '1 year') selected @endif>1 year
                                        </option>
                                        <option value="2 years" @if ($recruter->experience == '2 years') selected @endif>2
                                            years</option>
                                        <option value="3 years" @if ($recruter->experience == '3 years') selected @endif>3
                                            years</option>
                                        <option value="4 years" @if ($recruter->experience == '4 years') selected @endif>4
                                            years</option>
                                        <option value="5 years" @if ($recruter->experience == '5 years') selected @endif>5
                                            years</option>
                                        <option value="more than 5 years" @if ($recruter->experience == 'more than 5 years') selected @endif>more than 5 years
                                        </option>
                                    </select>
                                </div>
                                <div class="form-field">
                                    <label>Location</label>
                                    <input type="text" name="location" id="location" value="{{ $recruter->location }}" placeholder="" />
                                </div>
                                <div class="form-field">
                                    <label>Salary</label>
                                    <input type="text" name="salary" id="salary" value="{{ $recruter->salary }}" placeholder="" />
                                </div>
                                <div class="form-field">
                                    <label>Status</label>
                                    <select name="status" id="status">
                                        <option value="1" @if ($recruter->status == '1') selected @endif>
                                            Active</option>
                                        <option value="2" @if ($recruter->status == '2') selected @endif>
                                            Paused</option>
                                        <option value="3" @if ($recruter->status == '3') selected @endif>
                                            Archived</option>
                                    </select>
                                </div>
                                <div class="form-field">
                                    <label>Workplace Type</label>
                                    <select name="workplace_type" id="workplace_type" required>
                                        <option value="remote" @if ($recruter->work_place == 'remote') selected @endif>
                                            Remote</option>
                                        <option value="on-site" @if ($recruter->work_place == 'on-site') selected @endif>On
                                            Site</option>
                                    </select>
                                </div>
                                <div class="form-field">
                                    <label>Type Of Employement</label>
                                    <input type="text" name="employment_type" id="employment_type" value="{{ $recruter->employment_type }}" placeholder="" />
                                </div>

                                <div class="form-field">
                                    <label>Schedule</label>
                                    <select name="schedule" id="schedule">
                                        <option value="day-shift" @if ($recruter->work_place == 'day-shift') selected @endif>
                                            Day Shift</option>
                                        <option value="night-shift" @if ($recruter->work_place == 'night-shift') selected @endif>Night Shift</option>
                                        <option value="flexible-shift" @if ($recruter->work_place == 'flexible-shift') selected @endif>Flexible Shift</option>
                                    </select>
                                </div>

                                <div class="form-field">
                                    <label>Number Of Vacancy</label>
                                    <input type="text" name="vacancy" id="vacancy" value="{{ $recruter->vacancy }}" placeholder="" />
                                </div>
                                <div class="form-field">
                                    <label>Skills Needed</label>
                                    <div class="post-form-list">
                                        <input type="text" name="skill1" id="skill1" value="{{ $recruter->skill1 }}" placeholder="" />
                                        <input type="text" name="skill2" id="skill2" value="{{ $recruter->skill2 }}" placeholder="" />
                                        <input type="text" name="skill3" id="skill3" value="{{ $recruter->skill3 }}" placeholder="" />
                                    </div>
                                </div>
                                <div class="form-field">
                                    <label>Questions</label>
                                    @php
                                    $i=1;
                                    @endphp
                                    @if(count($recruterjobQuestions)>0)
                                    @foreach ($recruterjobQuestions as $item)
                                    @if($i==1)
                                    <div class="d-flex">
                                        <input type="text" placeholder="Question" name="question[que-{{$item->id}}]" value="{{$item->question}}" id="question_{{$i}}">
                                        <a href="javascript:void(0)" onclick="addQuestion()" class="btn btn-primary pt-10"> Add</a>
                                    </div>
                                    @else
                                    <div class="question_{{$i}}">
                                        <div class="d-flex">
                                            <input type="text" placeholder="Question" value="{{$item->question}}" name="question[que-{{$item->id}}]" id="question_{{$i}}">
                                            <a href="javascript:void(0)" class="btn btn-danger pt-10" onClick="removeQuestion('{{$i}}')">Remove</a>
                                        </div>
                                    </div>
                                    @endif
                                    @php
                                    $i++;
                                    @endphp
                                    @endforeach
                                    @else
                                    <div class="d-flex">
                                        <input type="text" placeholder="Question" name="question[]" id="question_{{$i}}">
                                        <a href="javascript:void(0)" onclick="addQuestion()" class="btn btn-primary pt-10"> Add</a>
                                    </div>
                                    @endif
                                    <div class="questions">


                                    </div>
                                </div>


                                @csrf
                                <input type="hidden" name="id" id="id" value="{{ $recruter->id }}">
                                <input type="hidden" name="qcount" id="qcount" value="{{$i}}">
                                <div class="popup-btn">
                                    <button type="submit" class="edit-job-btn">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@section('script')
<script>
    function addQuestion() {
        var qcount = $('#qcount').val();
        qcount++;
        var html = '<div class="form-field question_' + qcount + '">' + '<div class="d-flex">' +
            '<input type="text" placeholder="Question" name="question[]" id="question_' + qcount + '">' +
            '<a href="javascript:void(0)" class="btn btn-danger pt-10" onClick="removeQuestion(' + qcount +
            ')">Remove</a>' + '</div>' + '</div>';
        $('.questions').append(html);
        $('#qcount').val(qcount);

    }

    function removeQuestion(qcount) {
        $('.question_' + qcount).remove();
    }
</script>
@endsection