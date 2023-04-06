@extends('admin.layouts.app')

@section('title', 'Job Post')

@section('content')
@php
$category=array("ceo"=>'CEO',
"supply-chain"=>'Supply Chain',
"product-development"=>'Product Development',
"amazon-pmps"=>'Amazon & Pmps',
"creatives"=>'Creatives',
"content-copy"=>'Content & Copy',
"graphic-designer"=>'Graphic Designer',
"web-tech"=>'Web & Tech',
"social-media-outreach"=>'Social Media & Outreach',
"customer-engagement"=>'Customer Engagement',
"indea-team"=>'India Team',
"internal-hr"=>'Internal Operations (HR)',
"internal-finance"=>'Internal Operations (Finance)',
"internal-admin"=>'Internal Operations (Legal & Admin)');


@endphp
<div class="dash-content-area-sec">
    <div class="mobile-toogle">
        <div class="menu-icon" id="menu-Toggle">
            <a href="javascript:void(0)"><img src="{{ asset('assets/admin/img/home/menu.png') }}" /></a>
        </div>
        <div class="mobile-logo">
            <img src="{{ asset('assets/admin/img/logo/main.svg') }}" />
        </div>
    </div>

    <div class="dashboard-header-main-sec">
        <div class="row">
            <div class="col-lg-3">
                <div class="left-title-fix">
                    <h4>Teams</h4>
                    <div class="logo-menu-block">
                        <ul>
                            <li>
                                <a href="javascript:void(0)">
                                    <svg width="9" height="8" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.81373 3.93446L4.72455 0.0876118C4.69511 0.0598391 4.66013 0.0378053 4.62164 0.0227718C4.58314 0.00773823 4.54187 0 4.50019 0C4.45851 0 4.41724 0.00773823 4.37874 0.0227718C4.34024 0.0378053 4.30526 0.0598391 4.27582 0.0876118L0.186639 3.93446C0.0675077 4.04661 0 4.19895 0 4.35783C0 4.68775 0.284922 4.95598 0.635367 4.95598H1.06623V7.70093C1.06623 7.86635 1.20819 8 1.38391 8H3.86482V5.90648H4.97671V8H7.61646C7.79218 8 7.93415 7.86635 7.93415 7.70093V4.95598H8.365C8.53377 4.95598 8.69559 4.89336 8.81472 4.78028C9.06192 4.54662 9.06192 4.16811 8.81373 3.93446Z" fill="#787878" />
                                    </svg>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Teams</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('admin/include/header')
        </div>
    </div>
    <div class="latest-sec-main">
        <div class="latest-inner">
            <div class="row">
                <div class="col-lg-12">
                    <div class="job-con-block">
                        <div class="custom-title d-flex justify-content-betweeen">
                            <h2>Our Teams</h2>
                            <div class="job-detail-btn">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#myModal"> Add Member </a>
                            </div>
                        </div>
                        @foreach($teams as $team)
                        <div class="job-content-block">
                            <div class="job-box-block">
                                <div class="job-box-img">
                                    <img src="{{ asset('uploads/team') . '/' . $team->profile }}" />
                                </div>
                                <div class="job-detail-block">
                                    <div class="job-detail-content">
                                        <h5>{{ $team->name}}</h5>
                                        <div class="job-detail-list">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-clipboard"></i>
                                                    <div class="job-icon-title">
                                                        <p>{{ $team->designation}}</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-list"></i>
                                                    <div class="job-icon-title">
                                                        <p>{{ $category[$team->category]}}</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="job-detail-btn">
                                        <a href="#" onclick="editTeam('{{$team->id}}','{{$team->name}}','{{$team->designation}}','{{$team->category}}')"> Edit </a>
                                        <a href="#" class="ms-2 btn-danger" onclick="deleteTeam('{{$team->id}}')"> Delete </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
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
                        <h2 class="team-modal-title">Add Team</h2>
                        <div class="popup-title-divider"></div>
                    </div>
                    <div class="popup-con-block">
                        <div class="popup-box">
                            <form method="post" action="{{ route('admin.team.store') }}" enctype="multipart/form-data">
                                <div class="form-fields">
                                    <label for="">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                                <div class="form-fields">
                                    <label for="">Designation</label>
                                    <input type="text" name="designation" id="designation" class="form-control" required>
                                </div>
                                <div class="form-fields">
                                    <label for="">Category</label>
                                    <select name="category" id="category" class="form-control" required>
                                        <option value="ceo">CEO</option>
                                        <option value="supply-chain">Supply Chain</option>
                                        <option value="product-development">Product Development</option>
                                        <option value="amazon-pmps">Amazon & Pmps</option>
                                        <option value="creatives">Creatives</option>
                                        <option value="content-copy">Content & Copy</option>
                                        <option value="graphic-designer">Graphic Designer</option>
                                        <option value="web-tech">Web & Tech</option>
                                        <option value="social-media-outreach">Social Media & Outreach</option>
                                        <option value="customer-engagement">Customer Engagement</option>
                                        <option value="indea-team">India Team</option>
                                        <option value="internal-hr">Internal Operations (HR)</option>
                                        <option value="internal-finance">Internal Operations (Finance)</option>
                                        <option value="internal-admin">Internal Operations (Legal & Admin)</option>
                                    </select>
                                </div>
                                <div class="form-fields">
                                    <label for="">Profile Image</label>
                                    <input type="file" name="profile" id="profile" class="form-control" required>
                                </div>
                                @csrf
                                <input type="hidden" name="id" id="id">
                                <div class="popup-btn mt-3">
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
@endsection
@section('script')
<script>
    function editTeam(id, name, designation, category) {
        $('#id').val(id);
        $('#name').val(name);
        $('#designation').val(designation);
        $('#category').val(category);
        $('#profile').removeAttr('required');
        $('#myModal').modal('show');
    }

    function deleteTeam(id) {
        swal({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
        }).then(function(isConfirm) {
            if (isConfirm.value==true) {
                $.ajax({
                    type: 'DELETE',
                    url: "/admin/team/delete/" + id + '?_token={{csrf_token()}}',
                    success: function() {
                        location.reload();
                    },
                    error: function(_error) {
                        console.log(_error);
                    }
                });
                swal("Deleted!", "The record has been deleted.", "success");
            } else {
                swal("Cancelled", "The record is safe :)", "error");
            }
        });
    }
</script>
@endsection