@php
$latest_candidate=\App\Models\Candidate::where('status',0)->orderBy('id','desc')->get();
$notification_count=\App\Models\Candidate::where('status',0)->orderBy('id','desc')->count();
$notification_class='';
if($notification_count>0){
    $notification_class='notificaion-count';
}
@endphp
<div class="col-lg-9">
    <div class="search-sec-main">
        <div class="search-bar">
            <form action="" method="get" id="search-form">
                <input type="text" name="search" id="search" value="@if(isset($_REQUEST['search'])) {{ $_REQUEST['search']}} @endif" class="form-control" placeholder="Search" />
            </form>
            <img class="search-icon" src="{{ asset('assets/admin/img/home/search-icon.svg')}}" />
            <a href="{{route('admin.recruter.add')}}" type="button" value="">
                <img src="{{ asset('assets/admin/img/home/logout.svg')}}" /> &nbsp; Post Job
            </a>
        </div>
        <div class="user-con-block">
            <div class="user-notification-icon">
                <div class="notification-icon {{$notification_class}}">
                    <a href="#"><img src="{{ asset('assets/admin/img/home/user-notification-icon.png')}}" /></a>
                    <div class="notification-menu">
                        <div class="applicant-content-block">
                            @foreach($latest_candidate as $candidate)
                            <div class="applicant-box-block">
                                <div class="applicant-box-img">
                                    <img src="{{ asset('uploads/profile').'/'.$candidate->profile}}" class="candidate-dashboard-image">
                                </div>
                                <div class="applicant-detail-block">
                                    <div class="applicant-detail-content">
                                        <a href="{{ route('admin.candidate.show',$candidate->id)}}">
                                            <h5>{{ $candidate->name}}</h5>
                                            <p>Applied for <span>{{ $candidate->job->title}}</span></p>
                                        </a>
                                    </div>
                                    <div class="applicant-detail-btn">
                                        <a href="{{ route('admin.candidate.changestatus',['id'=>$candidate->id,'status'=>1])}}">
                                            <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 4.88889L4.38462 8L12 1" stroke="#009798" stroke-width="2" stroke-linecap="round"></path>
                                            </svg>
                                        </a>
                                        <a href="{{ route('admin.candidate.changestatus',['id'=>$candidate->id,'status'=>2])}}">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.128 10.2127L1.02161 1.10638M10.128 1.10646L1.02161 10.2128" stroke="#FF4040" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
            @if(!empty(Auth::guard('admin')->user()))
            <div class="user-login-block">
                <div class="user-login-img">
                    <img src="{{ asset('assets/admin/img/home/user-img.jpg')}}" />
                </div>
                <div class="user-login-content-block">
                    <div class="user-login-content">
                        <a href="javascript:void(0)">
                            <h5>{{ ucfirst(Auth::guard('admin')->user()->name)}}</h5>
                            <p>{{ Auth::guard('admin')->user()->email}}</p>
                        </a>
                    </div>
                    <!--  <div class="user-login-arrow">
                        <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L4.39474 5L8 1" stroke="#868686" stroke-linecap="round" />
                        </svg>
                    </div> -->
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
