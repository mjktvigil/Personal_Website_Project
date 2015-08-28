/**
 * portfolio.js
 * javaScript for Portfolio Pages for jtdesignsolutions.com website
 **/

/* thumbnail carousel */
$(document).ready(function(){
	/* copy loaded thumbnails into carousel */
	$('.row .thumbnail').on('load', function() {
		/* load function */
	}).each(function(i) {
		if(this.complete) {
			var item = $('<div class="item"></div>');
			var itemDiv = $(this).parents('div');
			var title = $(this).parent('a').attr("title");

			item.attr("title",title);
			$(itemDiv.html()).appendTo(item);
			item.appendTo('.carousel-inner');
			if (i==0){ // set first item active
				item.addClass('active');
			}
		}
	});
	/* slider for carousel */
	$('#modalCarousel').carousel({interval:false});
	/* change modal title when slide changes */
	$('#modalCarousel').on('slid.bs.carousel', function () {
		$('.modal-title').html($(this).find('.active').attr("title"));
	})
	/* when clicking a thumbnail */
	$('.row .thumbnail').click(function(){
		var idx = $(this).parents('div').index();
		var id = parseInt(idx);
		$('#thumbnail-modal-id').modal('show'); // show the modal
		$('#modalCarousel').carousel(id); // slide carousel to selected
	});
});
