@extends('admin.layouts.app')

@section('title','Upload Video')

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
                        <h4>Upload Video</h4>
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
                                    <a href="javascript:void(0)">Upload Video</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @include('admin/include/header')
            </div>
        </div>
   
    <div class="video-sec-main">
        <div class="container">
            <div class="video-inner">
                <div class="row">
                    @foreach($videos as $video)
                    <div class="col-md-4">
                        <div class="video-con-block">
                            <div class="video-img">
                                <video width="320" height="240" id="video-block" controls="">
                                    <source src="{{ asset('uploads/video').'/'.$video->video}}" type="video/mp4" />
                                </video>
                            </div>
                            <div class="video-img-content">
                                <h3>{{ $video->name}}</h3>
                                <p>{{ $video->category}}</p>
                                <ul>
                                    <li>
                                        <div class="video-icon-title">
                                            <p>{{$video->view}} views</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="video-icon" href="javascript:void(0)">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6 12C4.81331 12 3.65328 11.6481 2.66658 10.9888C1.67989 10.3295 0.910851 9.39246 0.456726 8.2961C0.0025996 7.19975 -0.11622 5.99335 0.115291 4.82946C0.346802 3.66558 0.918247 2.59648 1.75736 1.75736C2.59648 0.918247 3.66558 0.346802 4.82946 0.115291C5.99335 -0.11622 7.19975 0.0025996 8.2961 0.456726C9.39246 0.910851 10.3295 1.67989 10.9888 2.66658C11.6481 3.65328 12 4.81331 12 6C11.9983 7.59077 11.3656 9.1159 10.2407 10.2407C9.1159 11.3656 7.59077 11.9983 6 12ZM6 1C5.0111 1 4.0444 1.29325 3.22215 1.84265C2.39991 2.39206 1.75904 3.17296 1.38061 4.08659C1.00217 5.00022 0.90315 6.00555 1.09608 6.97545C1.289 7.94536 1.76521 8.83627 2.46447 9.53554C3.16373 10.2348 4.05465 10.711 5.02455 10.9039C5.99446 11.0969 6.99979 10.9978 7.91342 10.6194C8.82705 10.241 9.60794 9.6001 10.1574 8.77785C10.7068 7.95561 11 6.98891 11 6C10.9985 4.67437 10.4713 3.40344 9.53393 2.46608C8.59656 1.52871 7.32564 1.00146 6 1Z" fill="#787878"></path>
                                                <path d="M3.97337 7.799L3.44287 6.951L5.49987 5.6625V3H6.49987V6.2165L3.97337 7.799Z" fill="#787878"></path>
                                            </svg>
                                        </a>
                                        <div class="video-icon-title">
                                            <p>Last updated on {{ date('M d,Y',strtotime($video->updated_at))}}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="video-upload-btn">
            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal" class="video-upload-add-icon">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 1.00003V13" stroke="#009798" stroke-width="1.5" stroke-linecap="round"></path>
                    <path d="M13 7.00003L1 7.00003" stroke="#009798" stroke-width="1.5" stroke-linecap="round"></path>
                </svg>
            </a>
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
                        <h2>Upload Video</h2>
                        <div class="popup-title-divider"></div>
                    </div>
                    <div class="popup-con-block">
                        <div class="popup-box">
                            <form action="{{ route('admin.upload-video.store')}}" method="post" enctype="multipart/form-data">
                                <div class="form-field">
                                    <label>Category</label>
                                    <input type="text" name="category" id="category" placeholder="" required />
                                </div>
                                <div class="form-field">
                                    <label>Title</label>
                                    <input type="text" name="title" id="title" placeholder="" required />
                                </div>
                                <div class="form-field uploader">
                                    <input id="file-upload" type="file" name="fileUpload" accept="video/*" required />
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
                                @csrf
                                <div class="popup-btn video-btn-form">
                                    <a href="javascript:void(0)"  data-bs-dismiss="modal" class="btn">Cancel</a>
                                    <button type="submit" class="btn btn-sm">Upload Video</button>
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

            var isGood = (/\.(?=mp4|webm)/gi).test(imageName);
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
</script>
@endsection