// remap jQuery to $
(function ($) {

	/* trigger when page is ready */
	$(document).ready(function (){
		$(".toggle").click(function(){
			$(".menu-all-pages-container").slideToggle();
			return false;
		});

		$(window).resize(function(event) {
			if ($('.toggle').css("display") == "none" ){
				$('.menu-all-pages-container').css("display", "block");
				} else {
					$('.menu-all-pages-container').css("display", "none");
				}
		});

	});

}(window.jQuery || window.$));