/**
 * Created by Marie on 8/1/15.
 */



x = 0;
$(document).ready(function(){

	// scroll
	$("blockquote").scroll(function(){
	});

	// carousel
	$('.carousel').carousel({
		interval: 5000
	});

	// scroller
	$(function(){
		var scroller = $('#scroller div.innerScrollArea');
		var scrollerContent = scroller.children('ul');
		scrollerContent.children().clone().appendTo(scrollerContent);
		var curX = 0;
		scrollerContent.children().each(function(){
			var $this = $(this);
			$this.css('left', curX);
			curX += $this.outerWidth(true);
		});
		var fullW = curX / 2;
		var viewportW = scroller.width();

		scroller.css('overflow-x', 'auto');
	});





});