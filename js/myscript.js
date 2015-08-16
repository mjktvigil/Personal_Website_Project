/**
 * Created by Marie on 8/1/15.
 */



x = 0;
$(document).ready(function() {
	$('.nav .navbar-nav .navbar-right').bind("mouseover", function(){
		var color  = $(this).css("background-color");

		$(this).css("background", "#380606");

		$(this).bind("mouseout", function(){
			$(this).css("background", color);
		})
	})
});