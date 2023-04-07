<div class="sidebar-main">
    <a class="closebtnmob" href="#">✕</a>
    <div class="logo-main-sec">
        <a href="{{ route('dashboard')}}"><img src="{{ asset('assets/admin/img/logo/main.svg')}}" /></a>
    </div>
    <div class="sidebar-menu">
        <ul class="side-main-list-sec">
            <li @if(request()->is('admin/dashboard') || request()->is('admin')) class="active" @endif>
                <a href="{{ route('dashboard')}}">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 2.5C1 2.10218 1.15803 1.72065 1.43934 1.43934C1.72065 1.15803 2.10218 1 2.5 1H4C4.39782 1 4.77936 1.15803 5.06066 1.43934C5.34197 1.72065 5.5 2.10218 5.5 2.5V4C5.5 4.39782 5.34197 4.77936 5.06066 5.06066C4.77936 5.34197 4.39782 5.5 4 5.5H2.5C2.10218 5.5 1.72065 5.34197 1.43934 5.06066C1.15803 4.77936 1 4.39782 1 4V2.5ZM8.5 2.5C8.5 2.10218 8.65803 1.72065 8.93935 1.43934C9.22068 1.15803 9.6022 1 10 1H11.5C11.8978 1 12.2793 1.15803 12.5606 1.43934C12.842 1.72065 13 2.10218 13 2.5V4C13 4.39782 12.842 4.77936 12.5606 5.06066C12.2793 5.34197 11.8978 5.5 11.5 5.5H10C9.6022 5.5 9.22068 5.34197 8.93935 5.06066C8.65803 4.77936 8.5 4.39782 8.5 4V2.5ZM1 10C1 9.6022 1.15803 9.22068 1.43934 8.93935C1.72065 8.65803 2.10218 8.5 2.5 8.5H4C4.39782 8.5 4.77936 8.65803 5.06066 8.93935C5.34197 9.22068 5.5 9.6022 5.5 10V11.5C5.5 11.8978 5.34197 12.2793 5.06066 12.5606C4.77936 12.842 4.39782 13 4 13H2.5C2.10218 13 1.72065 12.842 1.43934 12.5606C1.15803 12.2793 1 11.8978 1 11.5V10ZM8.5 10C8.5 9.6022 8.65803 9.22068 8.93935 8.93935C9.22068 8.65803 9.6022 8.5 10 8.5H11.5C11.8978 8.5 12.2793 8.65803 12.5606 8.93935C12.842 9.22068 13 9.6022 13 10V11.5C13 11.8978 12.842 12.2793 12.5606 12.5606C12.2793 12.842 11.8978 13 11.5 13H10C9.6022 13 9.22068 12.842 8.93935 12.5606C8.65803 12.2793 8.5 11.8978 8.5 11.5V10Z" stroke="#787878" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Dashboard
                </a>
            </li>
            <li @if(request()->is('admin/candidate*')) class="active" @endif>
                <a href="{{ route('admin.candidate.index')}}">
                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 14H17V12.375C17 11.8684 16.8446 11.3745 16.5553 10.9617C16.2661 10.5491 15.8574 10.2381 15.3862 10.0722C14.915 9.90622 14.4045 9.89354 13.9258 10.0358C13.4471 10.1782 13.024 10.4684 12.7152 10.8662M13 14H5M13 14V12.375C13 11.842 12.8992 11.3326 12.7152 10.8662M5 14H1V12.375C1.00004 11.8684 1.15547 11.3745 1.44469 10.9617C1.73391 10.5491 2.14255 10.2381 2.6138 10.0722C3.08506 9.90622 3.5955 9.89354 4.07419 10.0358C4.55288 10.1782 4.97602 10.4684 5.2848 10.8662M5 14V12.375C5 11.842 5.1008 11.3326 5.2848 10.8662M5.2848 10.8662C5.58189 10.1122 6.0946 9.46584 6.7568 9.01052C7.41904 8.55528 8.20032 8.31193 9 8.31193C9.79968 8.31193 10.581 8.55528 11.2432 9.01052C11.9054 9.46584 12.4181 10.1122 12.7152 10.8662M11.4 3.4375C11.4 4.08397 11.1471 4.70395 10.697 5.16107C10.247 5.61819 9.63648 5.875 9 5.875C8.36352 5.875 7.75304 5.61819 7.30294 5.16107C6.85286 4.70395 6.6 4.08397 6.6 3.4375C6.6 2.79103 6.85286 2.17105 7.30294 1.71393C7.75304 1.25681 8.36352 1 9 1C9.63648 1 10.247 1.25681 10.697 1.71393C11.1471 2.17105 11.4 2.79103 11.4 3.4375ZM16.2 5.875C16.2 6.30595 16.0314 6.71927 15.7314 7.02404C15.4313 7.32881 15.0243 7.5 14.6 7.5C14.1757 7.5 13.7687 7.32881 13.4686 7.02404C13.1686 6.71927 13 6.30595 13 5.875C13 5.44403 13.1686 5.0307 13.4686 4.72595C13.7687 4.4212 14.1757 4.25 14.6 4.25C15.0243 4.25 15.4313 4.4212 15.7314 4.72595C16.0314 5.0307 16.2 5.44403 16.2 5.875ZM5 5.875C5 6.30595 4.83143 6.71927 4.53137 7.02404C4.23131 7.32881 3.82434 7.5 3.4 7.5C2.97566 7.5 2.56869 7.32881 2.26863 7.02404C1.96857 6.71927 1.8 6.30595 1.8 5.875C1.8 5.44403 1.96857 5.0307 2.26863 4.72595C2.56869 4.4212 2.97566 4.25 3.4 4.25C3.82434 4.25 4.23131 4.4212 4.53137 4.72595C4.83143 5.0307 5 5.44403 5 5.875Z" stroke="#787878" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Candidates
                </a>
            </li>
            <li @if(request()->is('admin/recruter*')) class="active" @endif>
                <a href="{{ route('admin.recruter.index')}}">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.44444 10.7778V13.4444M9 10.7778V13.4444M12.5556 10.7778V13.4444M1 17H17M1 7.22222H17M1 4.55556L9 1L17 4.55556M1.88889 7.22222H16.1111V17H1.88889V7.22222Z" stroke="#787878" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Job Post
                </a>
            </li>
            <li @if(request()->is('admin/upload-video*')) class="active" @endif>
                <a href="{{ route('admin.upload-video.index')}}">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.9167 5.72917V11.2708C6.9167 11.5954 7.28878 11.7854 7.55003 11.5875L11.2471 8.81667C11.4609 8.65833 11.4609 8.34167 11.2471 8.18333L7.55003 5.4125C7.49122 5.36839 7.42129 5.34153 7.34808 5.33493C7.27486 5.32833 7.20126 5.34225 7.13551 5.37512C7.06976 5.408 7.01446 5.45853 6.97581 5.52106C6.93717 5.5836 6.9167 5.65566 6.9167 5.72917ZM7.70836 1.55708C7.70836 1.05042 7.24128 0.662499 6.75045 0.773333C5.86378 0.979166 5.02461 1.3275 4.28045 1.8025C3.86086 2.07167 3.79753 2.67333 4.15378 3.02958C4.40711 3.28292 4.81086 3.34625 5.1117 3.15625C5.72128 2.76833 6.3942 2.48333 7.12253 2.325C7.47086 2.24583 7.70836 1.92125 7.70836 1.55708ZM3.03753 4.15375C2.67336 3.7975 2.07961 3.85292 1.81045 4.28042C1.33545 5.02458 0.987113 5.86375 0.78128 6.75042C0.670447 7.24125 1.05045 7.70833 1.55711 7.70833C1.91336 7.70833 2.24586 7.47083 2.31711 7.1225C2.47545 6.40208 2.76836 5.72125 3.14836 5.11958C3.3542 4.81083 3.29086 4.40708 3.03753 4.15375ZM1.55711 9.29167C1.05045 9.29167 0.66253 9.75875 0.773363 10.2496C0.979197 11.1362 1.32753 11.9675 1.80253 12.7196C2.0717 13.1471 2.67336 13.2025 3.02961 12.8462C3.28295 12.5929 3.34628 12.1892 3.14836 11.8883C2.76045 11.2867 2.47545 10.6137 2.31711 9.88542C2.24586 9.52917 1.92128 9.29167 1.55711 9.29167ZM4.28045 15.1896C5.03253 15.6646 5.86378 16.0129 6.75045 16.2187C7.24128 16.3296 7.70836 15.9417 7.70836 15.4429C7.70836 15.0867 7.47086 14.7542 7.12253 14.6829C6.41192 14.5235 5.73428 14.2423 5.11961 13.8517C4.96949 13.7602 4.79258 13.7229 4.6183 13.7459C4.44401 13.7689 4.28288 13.851 4.1617 13.9783C4.07624 14.059 4.01039 14.1581 3.96918 14.2681C3.92798 14.3782 3.91251 14.4962 3.92398 14.6131C3.93544 14.73 3.97353 14.8428 4.03532 14.9427C4.09711 15.0426 4.18096 15.1271 4.28045 15.1896ZM16.4167 8.5C16.4167 12.2446 13.8042 15.3954 10.2971 16.2108C9.80628 16.3296 9.33128 15.9417 9.33128 15.435C9.33128 15.0708 9.5767 14.7542 9.92503 14.6671C12.7354 14.0179 14.8334 11.5004 14.8334 8.5C14.8334 5.49958 12.7354 2.98208 9.92503 2.33292C9.5767 2.25375 9.33128 1.92917 9.33128 1.565C9.33128 1.05833 9.80628 0.670416 10.2971 0.789166C13.8042 1.60458 16.4167 4.75542 16.4167 8.5Z" fill="#787878" />
                    </svg>
                    Upload Video
                </a>
            </li>
            <li @if(request()->is('admin/team*')) class="active" @endif>
                <a href="{{ route('admin.team.index')}}">
                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 14H17V12.375C17 11.8684 16.8446 11.3745 16.5553 10.9617C16.2661 10.5491 15.8574 10.2381 15.3862 10.0722C14.915 9.90622 14.4045 9.89354 13.9258 10.0358C13.4471 10.1782 13.024 10.4684 12.7152 10.8662M13 14H5M13 14V12.375C13 11.842 12.8992 11.3326 12.7152 10.8662M5 14H1V12.375C1.00004 11.8684 1.15547 11.3745 1.44469 10.9617C1.73391 10.5491 2.14255 10.2381 2.6138 10.0722C3.08506 9.90622 3.5955 9.89354 4.07419 10.0358C4.55288 10.1782 4.97602 10.4684 5.2848 10.8662M5 14V12.375C5 11.842 5.1008 11.3326 5.2848 10.8662M5.2848 10.8662C5.58189 10.1122 6.0946 9.46584 6.7568 9.01052C7.41904 8.55528 8.20032 8.31193 9 8.31193C9.79968 8.31193 10.581 8.55528 11.2432 9.01052C11.9054 9.46584 12.4181 10.1122 12.7152 10.8662M11.4 3.4375C11.4 4.08397 11.1471 4.70395 10.697 5.16107C10.247 5.61819 9.63648 5.875 9 5.875C8.36352 5.875 7.75304 5.61819 7.30294 5.16107C6.85286 4.70395 6.6 4.08397 6.6 3.4375C6.6 2.79103 6.85286 2.17105 7.30294 1.71393C7.75304 1.25681 8.36352 1 9 1C9.63648 1 10.247 1.25681 10.697 1.71393C11.1471 2.17105 11.4 2.79103 11.4 3.4375ZM16.2 5.875C16.2 6.30595 16.0314 6.71927 15.7314 7.02404C15.4313 7.32881 15.0243 7.5 14.6 7.5C14.1757 7.5 13.7687 7.32881 13.4686 7.02404C13.1686 6.71927 13 6.30595 13 5.875C13 5.44403 13.1686 5.0307 13.4686 4.72595C13.7687 4.4212 14.1757 4.25 14.6 4.25C15.0243 4.25 15.4313 4.4212 15.7314 4.72595C16.0314 5.0307 16.2 5.44403 16.2 5.875ZM5 5.875C5 6.30595 4.83143 6.71927 4.53137 7.02404C4.23131 7.32881 3.82434 7.5 3.4 7.5C2.97566 7.5 2.56869 7.32881 2.26863 7.02404C1.96857 6.71927 1.8 6.30595 1.8 5.875C1.8 5.44403 1.96857 5.0307 2.26863 4.72595C2.56869 4.4212 2.97566 4.25 3.4 4.25C3.82434 4.25 4.23131 4.4212 4.53137 4.72595C4.83143 5.0307 5 5.44403 5 5.875Z" stroke="#787878" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Team
                </a>
            </li>
            <li @if(request()->is('admin/contact*')) class="active" @endif>
                <a href="{{ route('admin.contact.index')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 24 24"> 
                        <path d="M19 7h5v2h-5V7zm-2 5h7v2h-7v-2zm3 5h4v2h-4v-2zM2 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H2zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z"/>
                    </svg>
                    Contact Enquiry
                </a>
            </li>
            <li>
                @if(!empty(Auth::guard('admin')->user()))

                <a href="{{ route('admin.logout')}}">
                    <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.6667 10.75L16 7.5M16 7.5L12.6667 4.25M16 7.5H4.33333M9.33333 10.75V11.5625C9.33333 12.2089 9.06992 12.8289 8.60108 13.2861C8.13225 13.7432 7.49633 14 6.83333 14H3.5C2.83696 14 2.20107 13.7432 1.73223 13.2861C1.26339 12.8289 1 12.2089 1 11.5625V3.4375C1 2.79103 1.26339 2.17105 1.73223 1.71393C2.20107 1.25681 2.83696 1 3.5 1H6.83333C7.49633 1 8.13225 1.25681 8.60108 1.71393C9.06992 2.17105 9.33333 2.79103 9.33333 3.4375V4.25" stroke="#787878" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Logout
                </a>
                @else
                <a href="{{ route('admin.login')}}">
                    <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.6667 10.75L16 7.5M16 7.5L12.6667 4.25M16 7.5H4.33333M9.33333 10.75V11.5625C9.33333 12.2089 9.06992 12.8289 8.60108 13.2861C8.13225 13.7432 7.49633 14 6.83333 14H3.5C2.83696 14 2.20107 13.7432 1.73223 13.2861C1.26339 12.8289 1 12.2089 1 11.5625V3.4375C1 2.79103 1.26339 2.17105 1.73223 1.71393C2.20107 1.25681 2.83696 1 3.5 1H6.83333C7.49633 1 8.13225 1.25681 8.60108 1.71393C9.06992 2.17105 9.33333 2.79103 9.33333 3.4375V4.25" stroke="#787878" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Login
                </a>
                @endif
            </li>
        </ul>

        <!-- <div class="support-bottom-sec">
            <img src="{{ asset('assets/admin/img/home/support-img.png')}}" />
            <div class="support-content-box">
                <h4>Support 24/7</h4>
                <p>Conatct us anytime</p>
                <a href="#">Start Chat</a>
            </div>
        </div> -->
    </div>
</div>