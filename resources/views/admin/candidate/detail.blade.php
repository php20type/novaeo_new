@extends('admin.layouts.app')

@section('title','Candidate')
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
                    <h4>Candidates</h4>
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
                                <a href="javascript:void(0)">Candidates</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('admin/include/header')
        </div>
    </div>
    <div class="person-sec-main">
        <div class="row">
            <div class="col-lg-4">
                <div class="person-con-block">
                    <div class="person-content">
                        <div class="person-img-block">
                            <img src="{{ asset('uploads/profile').'/'.$candidate->profile}}" class="candidate-profile-image" />
                        </div>
                        <div class="person-content-block">
                            <h4>{{ $candidate->name}}</h4>
                            <p>
                                <a href="{{$candidate->profile_link}}" target="_()">{{ $candidate->profile_link}}</a>
                            </p>
                            <!-- <div class="person-skill-title">
                                <a href="javascript:void(0)">Skills</a>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">{{$candidate->skill1}}</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">{{$candidate->skill2}}</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">{{$candidate->skill3}}</a>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="information-btn text-center">
                                @if($candidate->resume!='' && $candidate->resume!=null)
                                @php
                                $resume_link=asset('uploads/resume').'/'.$candidate->resume;
                                @endphp
                                <a onclick="openPopup('{{$resume_link}}')" download=""><i class="fa fa-download"></i> Resume</a>
                                @endif
                                @if($candidate->portfolio!='' && $candidate->portfolio!=null)
                                @php
                                $portfolio_link=asset('uploads/portfolio').'/'.$candidate->portfolio;
                                @endphp
                                <a onclick="openPopup('{{$portfolio_link}}')" download=""><i class="fa fa-download"></i> Portfolio</a>
                                @endif
                            </div>
                            <!-- <div class="person-social-block">
                                <ul class="person-social-list">
                                    <li>
                                        <a href="javascript:void(0)"><svg width="12" height="21" viewBox="0 0 12 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.31319 20.6932V11.611H10.5618L11.0446 8.05497H7.31319V5.78996C7.31319 4.76383 7.61631 4.06128 9.17774 4.06128H11.1562V0.89092C10.1936 0.793616 9.22596 0.746633 8.2578 0.750187C5.38638 0.750187 3.41492 2.40352 3.41492 5.43868V8.04832H0.1875V11.6043H3.42197V20.6932H7.31319Z" fill="white" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.54284 0.8085C7.58255 0.760636 7.91405 0.75 10.5625 0.75C13.211 0.75 13.5425 0.761523 14.5813 0.8085C15.6201 0.855477 16.3292 1.02123 16.9496 1.26143C17.5993 1.50695 18.1888 1.89075 18.6763 2.38711C19.1726 2.87373 19.5555 3.46227 19.8002 4.11286C20.0413 4.73332 20.2061 5.44241 20.254 6.47945C20.3019 7.52093 20.3125 7.85243 20.3125 10.5C20.3125 13.1485 20.301 13.48 20.254 14.5197C20.207 15.5567 20.0413 16.2658 19.8002 16.8862C19.5555 17.5369 19.172 18.1264 18.6763 18.6138C18.1888 19.1101 17.5993 19.493 16.9496 19.7377C16.3292 19.9788 15.6201 20.1436 14.583 20.1915C13.5425 20.2394 13.211 20.25 10.5625 20.25C7.91405 20.25 7.58255 20.2385 6.54284 20.1915C5.5058 20.1445 4.7967 19.9788 4.17625 19.7377C3.52559 19.493 2.93607 19.1095 2.44873 18.6138C1.9527 18.1269 1.56885 17.5376 1.32393 16.8871C1.08373 16.2667 0.918864 15.5576 0.871 14.5205C0.823136 13.4791 0.8125 13.1476 0.8125 10.5C0.8125 7.85155 0.824023 7.52005 0.871 6.48123C0.917977 5.44241 1.08373 4.73332 1.32393 4.11286C1.56921 3.46234 1.95336 2.87312 2.44961 2.38623C2.93626 1.89031 3.52519 1.50646 4.17536 1.26143C4.79582 1.02123 5.50491 0.856364 6.54195 0.8085H6.54284ZM14.5024 2.5635C13.4742 2.51652 13.1657 2.50677 10.5625 2.50677C7.95925 2.50677 7.65079 2.51652 6.62261 2.5635C5.67155 2.60693 5.15568 2.76559 4.81177 2.89943C4.35707 3.0767 4.03177 3.28677 3.69052 3.62802C3.36704 3.94273 3.11809 4.32584 2.96193 4.74927C2.82809 5.09318 2.66943 5.60905 2.626 6.56011C2.57902 7.58829 2.56927 7.89675 2.56927 10.5C2.56927 13.1032 2.57902 13.4117 2.626 14.4399C2.66943 15.391 2.82809 15.9068 2.96193 16.2507C3.11793 16.6735 3.367 17.0573 3.69052 17.372C4.00518 17.6955 4.38898 17.9446 4.81177 18.1006C5.15568 18.2344 5.67155 18.3931 6.62261 18.4365C7.65079 18.4835 7.95836 18.4932 10.5625 18.4932C13.1666 18.4932 13.4742 18.4835 14.5024 18.4365C15.4535 18.3931 15.9693 18.2344 16.3132 18.1006C16.7679 17.9233 17.0932 17.7132 17.4345 17.372C17.758 17.0573 18.0071 16.6735 18.1631 16.2507C18.2969 15.9068 18.4556 15.391 18.499 14.4399C18.546 13.4117 18.5557 13.1032 18.5557 10.5C18.5557 7.89675 18.546 7.58829 18.499 6.56011C18.4556 5.60905 18.2969 5.09318 18.1631 4.74927C17.9858 4.29457 17.7757 3.96927 17.4345 3.62802C17.1198 3.30456 16.7366 3.05562 16.3132 2.89943C15.9693 2.76559 15.4535 2.60693 14.5024 2.5635ZM9.31716 13.5057C10.0127 13.7952 10.7871 13.8342 11.5082 13.6162C12.2293 13.3982 12.8523 12.9365 13.2709 12.3102C13.6894 11.6838 13.8775 10.9315 13.8031 10.1819C13.7286 9.43223 13.3962 8.73168 12.8626 8.19989C12.5225 7.85994 12.1112 7.59965 11.6583 7.43774C11.2055 7.27584 10.7224 7.21634 10.2438 7.26355C9.76527 7.31075 9.30311 7.46348 8.89064 7.71073C8.47818 7.95798 8.12566 8.29361 7.85847 8.69346C7.59129 9.0933 7.41608 9.54741 7.34546 10.0231C7.27484 10.4988 7.31057 10.9842 7.45007 11.4444C7.58957 11.9047 7.82938 12.3282 8.15223 12.6846C8.47508 13.0411 8.87294 13.3215 9.31716 13.5057ZM7.01882 6.95632C7.48418 6.49095 8.03665 6.12181 8.64467 5.86996C9.2527 5.6181 9.90438 5.48848 10.5625 5.48848C11.2206 5.48848 11.8723 5.6181 12.4803 5.86996C13.0884 6.12181 13.6408 6.49095 14.1062 6.95632C14.5715 7.42168 14.9407 7.97415 15.1925 8.58217C15.4444 9.1902 15.574 9.84188 15.574 10.5C15.574 11.1581 15.4444 11.8098 15.1925 12.4178C14.9407 13.0259 14.5715 13.5783 14.1062 14.0437C13.1663 14.9835 11.8916 15.5115 10.5625 15.5115C9.23336 15.5115 7.95866 14.9835 7.01882 14.0437C6.07898 13.1038 5.55098 11.8291 5.55098 10.5C5.55098 9.17086 6.07898 7.89616 7.01882 6.95632ZM16.6855 6.23482C16.8008 6.12603 16.8931 5.99522 16.957 5.85011C17.0209 5.70501 17.0549 5.54857 17.0573 5.39005C17.0596 5.23154 17.03 5.07417 16.9704 4.92726C16.9109 4.78036 16.8224 4.64691 16.7103 4.53481C16.5982 4.42271 16.4647 4.33424 16.3178 4.27464C16.1709 4.21504 16.0136 4.18552 15.855 4.18783C15.6965 4.19015 15.5401 4.22424 15.395 4.28809C15.2499 4.35195 15.1191 4.44427 15.0103 4.55959C14.7987 4.78387 14.6829 5.08177 14.6874 5.39005C14.6919 5.69834 14.8163 5.99273 15.0343 6.21075C15.2524 6.42876 15.5468 6.55323 15.855 6.55772C16.1633 6.56221 16.4612 6.44638 16.6855 6.23482Z" fill="white" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.22739 16.031C7.72458 16.0404 9.20874 15.7525 10.5938 15.184C11.9788 14.6154 13.2372 13.7776 14.2959 12.719C15.3546 11.6604 16.1925 10.4022 16.7612 9.01734C17.3298 7.63245 17.6177 6.14846 17.6083 4.65144V4.12855C18.3844 3.56001 19.0561 2.86135 19.5938 2.06357C18.863 2.38315 18.0897 2.5951 17.2981 2.69281C18.1374 2.19276 18.7671 1.40567 19.0708 0.477159C18.2886 0.946382 17.4309 1.27624 16.5358 1.45205C15.933 0.809832 15.1353 0.384151 14.2662 0.24087C13.3971 0.0975885 12.505 0.244693 11.7279 0.659422C10.9508 1.07415 10.3321 1.73339 9.96749 2.53512C9.60286 3.33686 9.51264 4.23641 9.7108 5.09457C8.12068 5.01653 6.56484 4.60449 5.14457 3.88528C3.7243 3.16606 2.47145 2.15581 1.46761 0.920289C0.961431 1.79873 0.808006 2.83667 1.0384 3.82396C1.2688 4.81126 1.86579 5.67412 2.70852 6.23785C2.08684 6.21388 1.47954 6.04385 0.935795 5.74154V5.78586C0.930271 6.70388 1.23957 7.59606 1.81215 8.31371C2.38472 9.03136 3.18598 9.53113 4.08239 9.72972C3.50416 9.88522 2.89846 9.90944 2.30966 9.80062C2.56917 10.5835 3.06456 11.267 3.72788 11.7573C4.3912 12.2476 5.18998 12.5207 6.01466 12.5392C4.60464 13.674 2.85219 14.2987 1.04216 14.3117C0.7248 14.3025 0.408185 14.2759 0.09375 14.2319C1.92582 15.399 4.05509 16.0144 6.22739 16.0044" fill="white" />
                                            </svg>

                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.61521 5.01168C3.73164 5.01168 4.63668 4.10664 4.63668 2.99021C4.63668 1.87379 3.73164 0.96875 2.61521 0.96875C1.49879 0.96875 0.59375 1.87379 0.59375 2.99021C0.59375 4.10664 1.49879 5.01168 2.61521 5.01168Z" fill="white" />
                                                <path d="M6.54316 6.54376V17.7588H10.0253V12.2127C10.0253 10.7493 10.3006 9.33204 12.1151 9.33204C13.9047 9.33204 13.9269 11.0052 13.9269 12.3051V17.7597H17.4108V11.6094C17.4108 8.58832 16.7604 6.26659 13.2293 6.26659C11.534 6.26659 10.3976 7.19694 9.9329 8.07741H9.88578V6.54376H6.54316ZM0.868652 6.54376H4.35632V17.7588H0.868652V6.54376Z" fill="white" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">

                <div class="information-con-block">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="custom-title">
                        <h2>Basic Information</h2>
                    </div>
                    <div class="information-box">
                        <form>
                            <div class="row">
                                <div class="col-md-6 form-field">
                                    <label>Full Name</label>
                                    <span>{{$candidate->name}}</span>
                                </div>
                                <div class="col-md-6 form-field">
                                    <label>E-Mail</label>
                                    <span>{{$candidate->email}}</span>
                                </div>
                                <div class="col-md-6 form-field">
                                    <label>Phone</label>
                                    <span>{{$candidate->mobile}}</span>

                                </div>
                                <div class="col-md-6 form-field">
                                    <label>Country</label>
                                    <span>{{$candidate->country}}</span>

                                </div>
                                <div class="col-md-6 form-field">
                                    <label>Experience</label>
                                    <span>{{$candidate->experience}}</span>
                                </div>
                                <!-- <div class="form-field">
                                <label>Address</label>
                                <span>{{$candidate->address}}</span>

                            </div> -->
                                @foreach($candidate->job->candidateQuestions as $question)
                                <div class="col-12 form-field">
                                    <label>{{$question->jobQuestion->question}}</label>
                                    <span>{{$question->answer}}</span>
                                </div>
                                @endforeach

                            </div>
                            <!-- <div class="form-field">
                                <label>Education Levels</label>
                                <span>{{$candidate->education_level}}</span>

                            </div>
                            <div class="form-field">
                                <label>Availability</label>
                                <span>{{$candidate->availability}}</span>
                            </div> -->
                            <div class="col-md-6 form-field">
                                @if($candidate->status==0)
                                <div class="information-btn">
                                    <a href="{{ route('admin.candidate.changestatus',['id'=>$candidate->id,'status'=>1])}}">Accept</a>
                                    <a href="{{ route('admin.candidate.changestatus',['id'=>$candidate->id,'status'=>2])}}">reject</a>
                                </div>
                                @endif
                                @if($candidate->status==1 && $candidate->interview_date==null)
                                <a href="javascript:void(0)" class="schedule-interview" data-bs-toggle="modal" data-bs-target="#myModal">Schedule Interview</a>
                                @endif
                                @if($candidate->status==1 && $candidate->interview_date!=null && $candidate->result==0)
                                <div class="information-btn">
                                    <a href="{{ route('admin.candidate.changeresult',['id'=>$candidate->id,'result'=>1])}}">Pass</a>
                                    <a href="{{ route('admin.candidate.changeresult',['id'=>$candidate->id,'result'=>2])}}">Fail</a>
                                </div>
                                @endif
                                @if($candidate->result==1)
                                <a href="javascript:void(0)" class="schedule-interview">Selected</a>
                                @endif
                                @if($candidate->result==2)
                                <a href="javascript:void(0)" class="reject-candidate">Not Selected</a>
                                @endif
                                @if($candidate->status==2)
                                <a href="javascript:void(0)" class="reject-candidate">Rejected</a>
                                @endif
                            </div>
                        </form>
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
                        <h2>Schedule Interview</h2>
                        <div class="popup-title-divider"></div>
                    </div>
                    <div class="popup-con-block">
                        <div class="popup-box">
                            <form method="post" action="{{ route('admin.candidate.scheduleInterview')}}">
                                <div class="form-field">
                                    <label>Interview Date</label>
                                    <input type="datetime-local" name="interview_date" id="interview_date" placeholder="" />
                                </div>
                                @csrf
                                <input type="hidden" name="candidate_id" id="candidate_id" value="{{ $candidate->id}}">
                                <div class="popup-btn">
                                    <button type="submit" class="edit-job-btn">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="pdf-preview-modal" tabindex="-1" role="dialog" aria-labelledby="pdf-preview-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pdf-preview-modal-label">PDF Preview</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="pdf-container">
                    <embed id="pdf-frame" src="https://www.africau.edu/images/default/sample.pdf" type="application/pdf"></embed>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    function openPopup(url) {
        $('#pdf-frame').attr('src',url);
        $('#pdf-preview-modal').modal('show');
    }
</script>
@endsection