$(document).ready(function() {

	function heightDetect() {
		$(".main-head").css("height", $(window).height());
	};
	heightDetect();
	
	$(window).resize(function(){ 
		heightDetect();
	});
	
	$("input,select,textarea").jqBootstrapValidation();
});
 
$(window).load(function() { 
	$(".loader-inner").delay(600).fadeOut(); 
	$(".loader").delay(400).fadeOut("slow"); 
});

$(".toggle-mnu, .menu_item").click(function() {
  $(".sandwich").toggleClass("active");
});

$(".toggle-mnu").click(function(){
	if ($(".top-mnu").is(":visible")) {
		$(".top-mnu").fadeOut(600);
		$(".top-mnu li a").removeClass("fadeInUp animated");
	} else {
		$(".top-mnu").fadeIn(600);
		$(".top-mnu li a").addClass("fadeInUp animated");
	};
});

$(".top-mnu li a").click(function() {
	$(".top-mnu").fadeOut(600);
	$(".sandwich").toggleClass("active");
}).append("<span>");


$(".top-text h1").animated("fadeInDown", "fadeOutUp")
$(".top-text p, .section-header").animated("fadeInUp", "fadeOutDown")
$(".animation-1").animated("fadeInLeft", "fadeOutLeft")
$(".animation-3").animated("fadeInRight", "fadeOutRight")
$(".animation-2").animated("flipInY", "fadeOutY")

$(".left .resume-item").animated("fadeInLeft", "fadeOutLeft")
$(".right .resume-item").animated("fadeInRight", "fadeOutRight")


$(".popup").magnificPopup({type: "image"});

$(".s-portfolio li").click(function() {
	$(".s-portfolio li").removeClass("active");
	$(this).addClass("active");
});

$("#portfolio-grid").mixItUp(); 

$(".popup-content").magnificPopup({
		type:"inline",
		midClick: true
	});

$(".portfolio-item").each(function(i) {
		$(this).find("a").attr("href", "#work_" + i);
		$(this).find(".podrt_descr").attr("id", "work_" + i);
	});

$("a[href*='#']").mPageScroll2id(); 