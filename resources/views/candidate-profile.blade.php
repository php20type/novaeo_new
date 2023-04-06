@extends('layouts.app')
@section('content')
    <!-- Person Section Start -->
    <section class="profile-sec-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="profile-con-block">
                        <div class="profile-content">
                            @php
                                if (Auth::user()->profile != null) {
                                    $profile = asset('uploads/profile') . '/' . Auth::user()->profile;
                                } else {
                                    $profile = asset('assets/front/img/default.png');
                                }
                            @endphp
                            <div class="profile-img-block">
                                <img src="{{ $profile }}" />
                            </div>
                            <div class="profile-content-block">
                                <h4>{{ Auth::user()->name }}</h4>

                                <a href="javascript:void(0)">{{ Auth::user()->email }}</a>
                                <div class="profile-skill-btn">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editProfileModal">Edit
                                        Profile</a>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                        data-bs-target="#changePasswordModal">Change Password</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @elseif (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    @error('old_password')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                    @error('new_password')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                    <div class="job-con-block">
                        <h4>Job Applied</h4>
                        <div class="job-content-block">
                            @foreach ($applications as $application)
                                <div class="job-box-block">
                                    <div class="job-detail-content">
                                        <h5>{{ $application->job->title }}</h5>
                                    </div>
                                    @if ($application->status == 0)
                                        <div class="candidate-job-edit-btn">
                                            <div class="job-detail-pending-btn">
                                                <span> pending </span>
                                            </div>
                                            <a href="javascript:void(0)" id="edit_candidate_job" class="edit_candidate_job" data-id="{{ $application->job_id }}">Edit</a>
                                        </div>
                                    @endif
                                    @if ($application->status == 1)
                                        <div class="job-detail-btn">
                                            <span> Application Approved </span>
                                        </div>
                                    @endif
                                    @if ($application->status == 2)
                                        <div class="job-detail-rejected-btn">
                                            <span> Application Rejected </span>
                                        </div>
                                    @endif
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Person Section End -->

    <!-- Modal -->
    <div id="editProfileModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Edit Profile</h2>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- <div class="col-md-6"> -->
                        <div class="popup-con-block">

                            <div class="popup-box">
                                <form method="post" enctype="multipart/form-data" action="{{ route('update-profile') }}">

                                    <div class="row">
                                        <div class="col-md-12 form-field">
                                            <label>Name *</label>
                                            <input type="text" placeholder="" name="name" id="name"
                                                value="{{ Auth::user()->name }}" required />
                                        </div>
                                        <div class="col-md-12 form-field">
                                            <label>Upload Profile *</label>
                                            <input type="file" placeholder="" name="profile" id="profile" />
                                        </div>

                                    </div>
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-block btn-primary candidate-submit-btn">Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- </div> -->
                        <!-- <div class="col-md-6">
                            <div class="apply-img-block">
                                <img src="{{ asset('assets/front/img/apply-now-img.png') }}" />
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="changePasswordModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Change Password</h2>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- <div class="col-md-6"> -->
                        <div class="popup-con-block">

                            <div class="popup-box">
                                <form action="{{ route('update-password') }}" method="POST">

                                    <div class="row">
                                        <div class="col-md-12 form-field">
                                            <label>Old Password *</label>
                                            <input type="password" placeholder="" name="old_password" id="old_password"
                                                placeholder="Old Password" required />
                                        </div>
                                        <div class="col-md-12 form-field">
                                            <label>New Password *</label>
                                            <input type="password" placeholder="" name="new_password" id="new_password"
                                                placeholder="New Password" required />
                                        </div>
                                        <div class="col-md-12 form-field">
                                            <label>Confirm New Password *</label>
                                            <input type="password" placeholder="" name="new_password_confirmation"
                                                id="new_password_confirmation" placeholder="Confirm New Password"
                                                required />
                                        </div>


                                    </div>
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-block btn-primary candidate-submit-btn">Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- </div> -->
                        <!-- <div class="col-md-6">
                            <div class="apply-img-block">
                                <img src="{{ asset('assets/front/img/apply-now-img.png') }}" />
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div id="candidateJobProfile" class="modal fade" role="dialog">
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
                            <h2>Edit Candidate Job Profile</h2>
                            <div class="popup-box">
                                <form method="post" action="{{ route('store-candidate-job-profile') }}">

                                    <div class="row">
                                        <div class="col-md-6 form-field">
                                            <input type="hidden" name="job_id" id="job_id">
                                            <input type="hidden" name="candidate_id" id="candidate_id">
                                            <input type="hidden" name="questions_arr" id="questions_arr">
                                            <label>Name *</label>
                                            <input type="text" placeholder="" name="name" id="candidate_name"
                                                required />
                                        </div>
                                        <div class="col-md-6 form-field">
                                            <label>Contact number *</label>
                                            <input type="tel" placeholder="" name="mobile" id="mobile"
                                                required />
                                        </div>
                                        <div class="col-md-6 form-field">
                                            <label>Email *</label>
                                            <input type="email" placeholder="xyz@gmail.com" name="email"
                                                id="email" required />
                                        </div>
                                        <div class="col-md-6 form-field">
                                            <label>Country *</label>
                                            <input type="text" placeholder="United State" name="country"
                                                id="country" required />
                                        </div>

                                        <div class="col-md-6 form-field">
                                            <label>Online jobs/Indeed/Upwork Profile
                                                Link
                                            </label>
                                            <input type="url" placeholder="" id="profile_link"
                                                name="profile_link" />
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

                                        <div class="question_list row"></div>

                                    </div>
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-block btn-primary candidate-submit-btn">Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- </div> -->
                        <!-- <div class="col-md-6">
                            <div class="apply-img-block">
                                <img src="{{ asset('assets/front/img/apply-now-img.png') }}" />
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
        $(".edit_candidate_job").click(function() {
            var job_id = $(this).data('id');
            var html = '';
            $.ajax({
                url: "{{ route('candidate-job-profile') }}",
                data: {
                    job_id: job_id
                },
                success: function(result) {
                    $.each(result.questions, function(key, value) {
                        html += '<div class="col-md-4 form-field">' + '<label>' + value
                            .question + '</label>' + '<input type="text" name="question_' +
                            value.id + '" id="question_' + value.id + '"></div>';
                    })
                    $('#candidate_name').val(result.applications.name);
                    $('#candidate_id').val(result.applications.id);
                    $('#job_id').val(job_id);
                    $('#mobile').val(result.applications.mobile);
                    $('#email').val(result.applications.email);
                    $('#experience').val(result.applications.experience);
                    $('#country').val(result.applications.country);
                    $('#profile_link').val(result.applications.profile_link);
                    $('.question_list').html(html);
                    $('#candidateJobProfile').modal('show');
                    $.each(result.answers, function(key, value) {
                        $("#question_" + value.question_id).val(value.answer);
                    })

                }
            });
        });
    </script>
@endsection
