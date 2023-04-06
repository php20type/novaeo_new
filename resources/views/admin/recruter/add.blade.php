@extends('admin.layouts.app')

@section('title', 'Job Post')
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
        <div class="container-fluid">
            <div class="dashboard-header-main-sec">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="left-title-fix">
                            <div class="logo-menu-block">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <svg width="9" height="8" viewBox="0 0 9 8" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.81373 3.93446L4.72455 0.0876118C4.69511 0.0598391 4.66013 0.0378053 4.62164 0.0227718C4.58314 0.00773823 4.54187 0 4.50019 0C4.45851 0 4.41724 0.00773823 4.37874 0.0227718C4.34024 0.0378053 4.30526 0.0598391 4.27582 0.0876118L0.186639 3.93446C0.0675077 4.04661 0 4.19895 0 4.35783C0 4.68775 0.284922 4.95598 0.635367 4.95598H1.06623V7.70093C1.06623 7.86635 1.20819 8 1.38391 8H3.86482V5.90648H4.97671V8H7.61646C7.79218 8 7.93415 7.86635 7.93415 7.70093V4.95598H8.365C8.53377 4.95598 8.69559 4.89336 8.81472 4.78028C9.06192 4.54662 9.06192 4.16811 8.81373 3.93446Z"
                                                    fill="#787878" />
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
        </div>
        <div class="single-post-sec-main">
            <div class="row">
                <div class="col-lg-9">
                    <div class="post-con-block">
                        <div class="custom-title">
                            <h2>Post a Job </h2>
                        </div>
                        <div class="post-box">
                            <form method="post" action="{{ route('admin.recruter.store') }}" enctype="multipart/form-data">

                                <div class="form-field">
                                    <label>Job title *</label>
                                    <input type="text" placeholder="Senior Graphic Designer" name="title"
                                        id='title' required>
                                </div>
                                <div class="form-field">
                                    <label>Job Specification</label>
                                    <textarea type="text" rows="5" cols="30" name="job_specification" id="job_specification"
                                        placeholder="Specification"></textarea>
                                </div>
                                <div class="form-field">
                                    <label>Job location</label>
                                    <input type="text" placeholder="Location" name="location" id="location">
                                </div>
                                <div class="form-field">
                                    <label>Workplace type *</label>
                                    <select name="workplace_type" id="workplace_type" required>
                                        <option value="remote">Remote</option>
                                        <option value="on-site">On Site</option>

                                    </select>
                                </div>
                                <div class="form-field">
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
                                    <!-- <input type="text" placeholder="Experience " name="experience" id="experience"> -->
                                </div>
                                <div class="form-field">
                                    <label>Salary</label>
                                    <input type="text" name="salary" id="salary" placeholder="$123 - $456">
                                </div>
                                <div class="form-field">
                                    <label>Status</label>
                                    <select name="status" id="status">
                                        <option value="1">Active</option>
                                        <option value="2">Paused</option>
                                        <option value="3">Archived</option>
                                    </select>
                                </div>
                                <div class="form-field">
                                    <label>Schedule</label>
                                    <select name="schedule" id="schedule">
                                        <option value="day-shift">Day Shift</option>
                                        <option value="night-shift">Night Shift</option>
                                        <option value="flexible-shift">Flexible Shift</option>
                                    </select>
                                </div>
                                <div class="form-field">
                                    <label>Skills Needed</label>
                                    <div class="post-form-list">
                                        <input type="text" name="skill1" id="skill1" placeholder="1. Skill">
                                        <input type="text" name="skill2" id="skill2" placeholder="2. Skill">
                                        <input type="text" name="skill3" id="skill3" placeholder="3. Skill">
                                    </div>
                                </div>
                                <div class="form-field">
                                    <label>Number Of Vacancy</label>
                                    <input type="number" placeholder="Number Of Vacancy " name="vacancy" id="vacancy">
                                </div>
                                <div class="form-field">
                                    <label>Type of employment</label>
                                    <input type="text" placeholder="Employment Type" name="type_employee"
                                        id="type_employee">
                                </div>
                                <div class="form-field">
                                    <label>Other</label>
                                    <textarea rows="5" cols="30" name="other_description" id="other_description"
                                        placeholder="Other Description"></textarea>
                                </div>
                                <div class="form-field uploader">
                                    <input id="file-upload" type="file" name="fileUpload" accept="image/*" />

                                    <label for="file-upload" id="file-drag">
                                        <img id="file-image" src="#" alt="Preview" class="hidden">
                                        <div id="start">
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                            <div>Select a file or drag here</div>
                                            <div id="notimage" class="hidden">Please select an image</div>
                                            <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                                        </div>
                                        <div id="response" class="hidden">
                                            <div id="messages"></div>

                                        </div>
                                    </label>
                                </div>
                                <div class="form-field">
                                    <label>Questions</label>
                                    <div class="d-flex">
                                        <input type="text" placeholder="Question" name="question[]" id="question_1">
                                        <a href="javascript:void(0)" onclick="addQuestion()"
                                            class="btn btn-primary pt-10"> Add</a>
                                    </div>
                                </div>
                                <div class="questions">


                                </div>
                        </div>
                        @csrf
                        <input type="hidden" name="qcount" id="qcount" value="1">
                        <div class="post-btn">
                            <button href="javascript:void(0)">Post New Job</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-post-img">
                    <img src="{{ asset('assets/admin/img/home/post-bg-img.png') }}">
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('script')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script>
        function ekUpload() {
            function Init() {

                console.log("Upload Initialised");

                var fileSelect = document.getElementById('file-upload'),
                    fileDrag = document.getElementById('file-drag'),
                    submitButton = document.getElementById('submit-button');

                fileSelect.addEventListener('change', fileSelectHandler, false);

                // Is XHR2 available?
                var xhr = new XMLHttpRequest();
                if (xhr.upload) {
                    // File Drop
                    fileDrag.addEventListener('dragover', fileDragHover, false);
                    fileDrag.addEventListener('dragleave', fileDragHover, false);
                    fileDrag.addEventListener('drop', fileSelectHandler, false);
                }
            }

            function fileDragHover(e) {
                var fileDrag = document.getElementById('file-drag');

                e.stopPropagation();
                e.preventDefault();

                fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
            }

            function fileSelectHandler(e) {
                // Fetch FileList object
                var files = e.target.files || e.dataTransfer.files;

                // Cancel event and hover styling
                fileDragHover(e);

                // Process all File objects
                for (var i = 0, f; f = files[i]; i++) {
                    parseFile(f);
                    uploadFile(f);
                }
            }

            // Output
            function output(msg) {
                // Response
                var m = document.getElementById('messages');
                m.innerHTML = msg;
            }

            function parseFile(file) {

                console.log(file.name);
                output(
                    '<strong>' + encodeURI(file.name) + '</strong>'
                );

                // var fileType = file.type;
                // console.log(fileType);
                var imageName = file.name;

                var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
                if (isGood) {
                    document.getElementById('start').classList.add("hidden");
                    document.getElementById('response').classList.remove("hidden");
                    document.getElementById('notimage').classList.add("hidden");
                    // Thumbnail Preview
                    document.getElementById('file-image').classList.remove("hidden");
                    document.getElementById('file-image').src = URL.createObjectURL(file);
                } else {
                    document.getElementById('file-image').classList.add("hidden");
                    document.getElementById('notimage').classList.remove("hidden");
                    document.getElementById('start').classList.remove("hidden");
                    document.getElementById('response').classList.add("hidden");
                    document.getElementById("file-upload-form").reset();
                }
            }

            function setProgressMaxValue(e) {
                var pBar = document.getElementById('file-progress');

                if (e.lengthComputable) {
                    pBar.max = e.total;
                }
            }

            function updateFileProgress(e) {
                var pBar = document.getElementById('file-progress');

                if (e.lengthComputable) {
                    pBar.value = e.loaded;
                }
            }

            function uploadFile(file) {

                var xhr = new XMLHttpRequest(),
                    fileInput = document.getElementById('class-roster-file'),
                    pBar = document.getElementById('file-progress'),
                    fileSizeLimit = 1024; // In MB
                if (xhr.upload) {
                    // Check if file is less than x MB
                    if (file.size <= fileSizeLimit * 1024 * 1024) {
                        // Progress bar
                        pBar.style.display = 'inline';
                        xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
                        xhr.upload.addEventListener('progress', updateFileProgress, false);

                        // File received / failed
                        xhr.onreadystatechange = function(e) {
                            if (xhr.readyState == 4) {
                                // Everything is good!

                                // progress.className = (xhr.status == 200 ? "success" : "failure");
                                // document.location.reload(true);
                            }
                        };

                        // Start upload
                        xhr.open('POST', document.getElementById('file-upload-form').action, true);
                        xhr.setRequestHeader('X-File-Name', file.name);
                        xhr.setRequestHeader('X-File-Size', file.size);
                        xhr.setRequestHeader('Content-Type', 'multipart/form-data');
                        xhr.send(file);
                    } else {
                        output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
                    }
                }
            }

            // Check for the various File API support.
            if (window.File && window.FileList && window.FileReader) {
                Init();
            } else {
                document.getElementById('file-drag').style.display = 'none';
            }
        }
        ekUpload();

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
