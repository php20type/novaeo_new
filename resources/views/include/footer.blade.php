 <!-- Footer Section Start -->
 <section class="footer-sec-main">
     <div class="container">
         <div class="footer-inner">
             <div class="footer-con-block">
                 <div class="footer-logo">
                     <a href="{{ route('home')}}">
                         <img src="{{ asset('assets/front/img/header-logo.png')}}">
                     </a>
                 </div>
                 <div class="footer-menu-area">
                     <ul>
                         <!-- <li><a href="{{ route('about-us')}}">About Us
                             </a></li> -->
                         <li><a href="{{ route('our-team')}}">Our Team</a></li>
                         <li><a href="{{ route('visionary')}}">The Visionary</a></li>
                         <li><a href="{{ route('career')}}">Careers</a></li>
                     </ul>
                 </div>
             </div>
             <div class="footer-bottom-block">
                 <div class="footer-bottom-content">
                     <p>© Novaeo 2022 , All Rights Reserved</p>
                 </div>
                 <div class="footer-social-list">
                     <!-- <ul>
                <li><a href="javascript:void(0)"><svg width="28" height="29" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 14.4112C0 21.3715 5.05517 27.1593 11.6667 28.333V18.2215H8.16667V14.333H11.6667V11.2215C11.6667 7.72151 13.9218 5.77784 17.1115 5.77784C18.1218 5.77784 19.2115 5.93301 20.2218 6.08817V9.66634H18.4333C16.7218 9.66634 16.3333 10.5215 16.3333 11.6112V14.333H20.0667L19.4448 18.2215H16.3333V28.333C22.9448 27.1593 28 21.3727 28 14.4112C28 6.66801 21.7 0.333008 14 0.333008C6.3 0.333008 0 6.66801 0 14.4112Z" fill="white"/>
                  </svg>
                  </a></li>
                <li><a href="javascript:void(0)"><svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.5 0.333008C6.49177 0.333008 0 6.60092 0 14.333C0 22.0651 6.49177 28.333 14.5 28.333C22.5082 28.333 29 22.0651 29 14.333C29 6.60092 22.5082 0.333008 14.5 0.333008ZM20.3982 11.8013C20.4042 11.9209 20.4057 12.0405 20.4057 12.1572C20.4057 15.803 17.5344 20.0045 12.2812 20.0045C10.7289 20.007 9.20896 19.5765 7.90401 18.7649C8.12604 18.7911 8.35411 18.8013 8.58521 18.8013C9.92344 18.8013 11.1544 18.3624 12.1317 17.6215C11.5361 17.6103 10.9591 17.4199 10.4809 17.0769C10.0028 16.7339 9.64741 16.2555 9.46427 15.7082C9.89195 15.7867 10.3325 15.7703 10.7527 15.6601C10.1063 15.5339 9.52499 15.1957 9.10737 14.7029C8.68976 14.2101 8.46152 13.5931 8.46135 12.9563V12.9228C8.84651 13.1284 9.28755 13.2538 9.75578 13.2684C9.1498 12.8789 8.72082 12.2807 8.55658 11.5959C8.39233 10.9112 8.50523 10.1917 8.87219 9.58467C9.58957 10.4363 10.4842 11.1331 11.4981 11.6297C12.5121 12.1264 13.6228 12.4119 14.7583 12.4678C14.6139 11.8762 14.6761 11.2551 14.935 10.701C15.194 10.147 15.6353 9.69112 16.1903 9.40423C16.7453 9.11733 17.3829 9.01552 18.004 9.11461C18.6251 9.2137 19.1949 9.50815 19.6248 9.95217C20.264 9.83008 20.8769 9.60371 21.4373 9.2828C21.2243 9.92175 20.7783 10.4643 20.1822 10.8097C20.7484 10.7438 21.3012 10.5969 21.8225 10.3736C21.4396 10.9276 20.9572 11.4111 20.3982 11.8013Z" fill="white"/>
                  </svg>
                  </a></li>
                
                  <li><a href="javascript:void(0)"><svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8346 28.3333C22.6587 28.3333 29.0013 21.9907 29.0013 14.1667C29.0013 6.34263 22.6587 0 14.8346 0C7.0106 0 0.667969 6.34263 0.667969 14.1667C0.667969 21.9907 7.0106 28.3333 14.8346 28.3333ZM14.8345 6.66602C12.7972 6.66602 12.5422 6.6742 11.7424 6.71102H11.7417C10.944 6.74783 10.3986 6.87465 9.92129 7.05942C9.42116 7.24791 8.96814 7.54318 8.59379 7.92465C8.21205 8.29918 7.91656 8.75243 7.72788 9.25283C7.54311 9.73011 7.41561 10.2756 7.37947 11.0747C7.34334 11.8737 7.33447 12.1287 7.33447 14.166C7.33447 16.2026 7.34265 16.4576 7.37947 17.2587C7.41629 18.0565 7.54311 18.6019 7.72788 19.0792C7.91628 19.5796 8.21155 20.0328 8.59311 20.4074C8.96799 20.7887 9.42146 21.0837 9.92197 21.2719C10.3992 21.4574 10.9447 21.5849 11.7424 21.621C12.5422 21.6572 12.7972 21.666 14.8345 21.666C16.8717 21.666 17.1267 21.6578 17.9272 21.621C18.7249 21.5842 19.2704 21.4574 19.7477 21.2719C20.2474 21.0837 20.7008 20.7892 21.0758 20.4074C21.4572 20.0325 21.7522 19.579 21.9404 19.0785C22.1258 18.6012 22.2533 18.0558 22.2895 17.2581C22.3256 16.4583 22.3345 16.2033 22.3345 14.166C22.3345 12.1294 22.3263 11.8744 22.2895 11.0733C22.2527 10.2756 22.1258 9.73011 21.9404 9.25283C21.7522 8.75238 21.4577 8.29965 21.0758 7.92533C20.7008 7.54352 20.2474 7.24829 19.7477 7.05942C19.2704 6.87465 18.7249 6.74715 17.9258 6.71102C17.1267 6.67488 16.8717 6.66602 14.8345 6.66602ZM14.8345 8.01738C16.837 8.01738 17.0742 8.02488 17.8652 8.06102C18.5967 8.09443 18.9936 8.21647 19.2581 8.31942C19.5838 8.43957 19.8785 8.63106 20.1206 8.87988C20.3831 9.14238 20.5447 9.39261 20.6811 9.74238C20.784 10.0069 20.9061 10.4037 20.9395 11.1353C20.9756 11.9262 20.9831 12.1635 20.9831 14.166C20.9831 16.1685 20.9756 16.4058 20.9395 17.1967C20.9061 17.9283 20.784 18.3251 20.6811 18.5897C20.5611 18.9149 20.3695 19.2101 20.1206 19.4522C19.8581 19.7147 19.6079 19.8762 19.2581 20.0126C18.9936 20.1156 18.5967 20.2376 17.8652 20.271C17.0742 20.3072 16.8377 20.3147 14.8345 20.3147C12.8313 20.3147 12.5947 20.3072 11.8038 20.271C11.0722 20.2376 10.6754 20.1156 10.4108 20.0126C10.0856 19.8926 9.79038 19.701 9.54834 19.4522C9.29947 19.2101 9.10788 18.9149 8.98788 18.5897C8.88493 18.3251 8.76288 17.9283 8.72947 17.1967C8.69334 16.4058 8.68584 16.1685 8.68584 14.166C8.68584 12.1635 8.69334 11.9262 8.72947 11.1353C8.76288 10.4037 8.88493 10.0069 8.98788 9.74238C9.108 9.41666 9.2995 9.12196 9.54834 8.87988C9.81084 8.61738 10.0611 8.45579 10.4108 8.31942C10.6754 8.21647 11.0722 8.09443 11.8038 8.06102C12.5947 8.02488 12.832 8.01738 14.8345 8.01738ZM15.5619 16.5631C15.0072 16.7308 14.4115 16.7008 13.8765 16.4781C13.5348 16.3364 13.2288 16.1207 12.9804 15.8465C12.7321 15.5723 12.5476 15.2465 12.4403 14.8925C12.333 14.5385 12.3055 14.1651 12.3598 13.7992C12.4141 13.4333 12.5489 13.0839 12.7545 12.7764C12.96 12.4688 13.2311 12.2106 13.5484 12.0204C13.8657 11.8302 14.2212 11.7127 14.5894 11.6764C14.9575 11.6401 15.3291 11.6859 15.6774 11.8104C16.0258 11.935 16.3421 12.1352 16.6038 12.3967C17.0142 12.8058 17.27 13.3447 17.3272 13.9213C17.3845 14.498 17.2398 15.0766 16.9178 15.5585C16.5959 16.0403 16.1166 16.3954 15.5619 16.5631ZM13.3592 10.6044C12.8915 10.7982 12.4665 11.0821 12.1086 11.4401C11.3856 12.1631 10.9795 13.1436 10.9795 14.166C10.9795 15.1884 11.3856 16.169 12.1086 16.8919C12.8315 17.6149 13.8121 18.021 14.8345 18.021C15.8569 18.021 16.8374 17.6149 17.5604 16.8919C17.9184 16.534 18.2023 16.109 18.396 15.6413C18.5898 15.1736 18.6895 14.6723 18.6895 14.166C18.6895 13.6598 18.5898 13.1585 18.396 12.6908C18.2023 12.2231 17.9184 11.7981 17.5604 11.4401C17.2024 11.0821 16.7774 10.7982 16.3097 10.6044C15.842 10.4107 15.3407 10.311 14.8345 10.311C14.3282 10.311 13.8269 10.4107 13.3592 10.6044ZM19.7533 10.5892C19.7042 10.7008 19.6332 10.8014 19.5445 10.8851C19.372 11.0478 19.1428 11.1369 18.9057 11.1335C18.6685 11.13 18.4421 11.0343 18.2744 10.8666C18.1066 10.6989 18.0109 10.4724 18.0075 10.2353C18.004 9.99814 18.0931 9.76899 18.2558 9.59647C18.3395 9.50776 18.4401 9.43675 18.5518 9.38763C18.6634 9.33851 18.7837 9.31228 18.9057 9.3105C19.0276 9.30873 19.1486 9.33143 19.2616 9.37728C19.3747 9.42312 19.4773 9.49118 19.5635 9.57741C19.6498 9.66364 19.7178 9.76629 19.7637 9.8793C19.8095 9.9923 19.8322 10.1134 19.8304 10.2353C19.8287 10.3572 19.8024 10.4776 19.7533 10.5892Z" fill="white"/>
                    </svg>
                    
                  </a></li>
              </ul> -->
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Footer Section End -->

 <!-- Return to Top -->

 <a href="javascript:" id="return-to-top" style="display: inline;"><i class="fa-solid fa-chevron-up"></i></a>