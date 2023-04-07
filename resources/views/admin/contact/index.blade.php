@extends('admin.layouts.app')

@section('title','Contact-Enquiry')
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
                    <h4>Contact Enquiry</h4>
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
                                <a href="javascript:void(0)">Contact Enquiry</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            @include('admin/include/header')

        </div>
    </div>
 
    <div class="lorem-ipsm-sec-main">
        <div class="lorem-ipsm-inner">
            <div class="lorem-ipsm-dropdown">
                <!-- <form>
                    <select>
                        <option class="lorem-ipsm-list">
                            Status: Awaiting Reviewed
                        </option>
                    </select>
                </form> -->
            </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Enquiry Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contactEnquiry as $post)
                    <tr>
                        <td>{{ $post->name }}</td>
                        <td>{{ $post->mobile }}</td>
                        <td>{{ $post->email }}</td>
                        <td>{{ $post->message }}</td>
                        <td>{{ $post->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')   
@endsection