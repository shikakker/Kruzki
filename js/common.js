$(document).ready(function(){
	$('.hamburger').click(function(){
		$(this).toggleClass('active-burger');
		$('.navbar nav').slideToggle();
		$('body').toggleClass('menu-active');
	});

	 // tabbed content
	 // http://www.entheosweb.com/tutorials/css/tabs.asp
	 $(".tab_content").hide();
	 $(".tab_content:first").show();

	 /* if in tab mode */
	 $("ul.tabs li").click(function() {

	   $(".tab_content").hide();
	   var activeTab = $(this).attr("rel");
	   $("#" + activeTab).fadeIn();

	   $("ul.tabs li").removeClass("active");
	   $(this).addClass("active");

	   $(".tab_drawer_heading").removeClass("d_active");
	   $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");

	 });
	 /* if in drawer mode */
	 $(".tab_drawer_heading").click(function() {

	   $(".tab_content").hide();
	   var d_activeTab = $(this).attr("rel");
	   $("#" + d_activeTab).fadeIn();

	   $(".tab_drawer_heading").removeClass("d_active");
	   $(this).addClass("d_active");

	   $("ul.tabs li").removeClass("active");
	   $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
	 });

	 /* Extra class "tab_last" 
	    to add border to right side
	    of last tab */
	 $('ul.tabs li').last().addClass("tab_last");


	 /*slider slick*/
	 $('.jumb-slider').slick({
	 	
	 	dots:true,
	 	autoplay: true,
  		autoplaySpeed: 4000,
	 	prevArrow:'<div class="slick-prev"><img src="images/slider/left.png"></div>',
    	nextArrow:'<div class="slick-next"><img src="images/slider/right.png"><</div>'
	 	
	 });

	/*gotop*/
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.goTop').fadeIn();
		} else {
			$('.goTop').fadeOut();
		}
	});
	//Click event to scroll to top
	$('.goTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	}); 

	

	/*Переход по якорям*/
	
})