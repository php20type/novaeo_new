
// Mobile Toggle js

 $(".closebtnmob").on("click",function () {
    $(".sidebar-main").hide(); 
 });
      
$("#menu-Toggle").on("click",function () {
    $(".sidebar-main").show();
});

//  active menu js

$('.side-main-list-sec').on('click', 'li', function() {
    $('.side-main-list-sec li.active').removeClass('active');
    $(this).addClass('active');
});
