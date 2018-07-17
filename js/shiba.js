
// Aos animation :-
AOS.init({
   duration: 2000, 
});



/* click icon and scroll  */
$(function(){
  $(".scroll_down, .open_position>span").click(function(){
     var store = $(this).attr("href");
      $('body,html').animate({scrollTop: $(store).offset().top-0},1500);
     return false;
  })

});


/* scroll section */
/*
$.scrollify({
    section : ".scroll_page",
    sectionName : "section-name",
    interstitialSection : "",
    easing: "easeOutExpo",
    scrollSpeed: 1100,
    offset : 0,
    scrollbars: true,
    standardScrollElements: "",
    setHeights: true,
    overflowScroll: true,
    updateHash: true,
    touchScroll:true,
 });
*/



$(window).scroll(function(){
   if ($(this).scrollTop() > 200){
     $('body').addClass("header-fixed");
     }
  else{
      $('body').removeClass("header-fixed");
     }
});


/*Menu Js*/
$(document).ready(function() {
  $('header .custom-menu-primary ul').children('li').has('ul').addClass('has-child');
  $('.has-child').children('a').after('<div class="child_trigger"><i></i></div>');
  
  $('.child_trigger').on('click', function(){
    $(this).toggleClass('child-open');
    $(this).next('ul').slideDown();
    $(this).parent('li').siblings('li').children('.child_trigger').next('ul').slideUp();
    $(this).parent('li').siblings('li').children('.child_trigger').removeClass('child-open');
    $(this).parent('li').siblings('li').children('.child_trigger').next('ul').children('li').children('ul').removeClass('menu_active');
    $(this).parent('li').siblings('li').children('.child_trigger').next('ul').children('li').children('.child_trigger').removeClass('child-open');
    $(this).parent('li').siblings('li').children('.child_trigger').next('ul').children('li').children('.child_trigger').next('ul').removeClass('menu_active');
    $(this).next('ul').children('li').children('.child_trigger').next('ul').removeClass('menu_active');
    $(this).next('ul').children('li').children('.child_trigger').removeClass('child-open');
  })

  $('.mobile-trigger').on('click', function(){ 
    $('header .custom-menu-primary').slideToggle().toggleClass('menu_open');
    $('body').toggleClass('menu_clicked');
    $('.child_trigger').removeClass('child-open');
    $('header .custom-menu-primary ul').removeClass('menu_active');
  })

  $(".mobile_area").click(function() {
       if($(window).width() <= 767){
        $("header .custom-menu-primary").slideUp().removeClass('menu_open');  
     }
  });

})



//Back To Top-//
$('footer').after('<a id="back-to-top" href="#top"><span></span></a>');
$("#back-to-top").hide();
$(function () {
  $(window).scroll(function(){
    if ($(window).scrollTop()>300){
       $("#back-to-top").fadeIn(500);
    }
    else{
       $("#back-to-top").fadeOut(500);
    }
  });
  $("#back-to-top").click(function(){
     $('body,html').animate({scrollTop:0},500);
     return false;
  });
});


