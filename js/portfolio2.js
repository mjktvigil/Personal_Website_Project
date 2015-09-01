$(document).ready(function(){

  jQuery(function($) {'use strict',

	// portfolio filter
	$(window).load(function(){'use strict';
		var $portfolio_selectors = $('.portfolio-filter >li>a');
		var $portfolio = $('.portfolio-items');
		$portfolio.isotope({
			itemSelector : '.portfolio-item',
			layoutMode : 'fitRows'
		});
		
		$portfolio_selectors.on('click', function(){
			$portfolio_selectors.removeClass('active');
			$(this).addClass('active');
			var selector = $(this).attr('data-filter');
			$portfolio.isotope({ filter: selector });
			return false;
		});
	});

	// ajax Contact mailerform
        //Get the form              
	var form = $('#main-contact-form');
        // Set up an event listener for the contact form.
	form.submit(function(event){
        // Stop the browser from submitting the form.
		event.preventDefault();
        // Get the messages from div
		var form_status = $('<div class="form_status"></div>');
        // Serialize the form data.
    var formData = form.serialize();
     	// Submit the form using AJAX.
    $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: formData
        })       
        beforeSend: (function(){
				form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn() );
			})
		}).done(function(response){
			form_status.html('<p class="text-success">' + data.message + '</p>').delay(3000).fadeOut();
        // Make sure that the formMessages div has the 'success' class.
    $(formMessages).removeClass('error');
    $(formMessages).addClass('success');
    // Set the message text.
    $(formMessages).text(response);
    // Clear the form.
    $('#name').val('');
    $('#email').val('');
    $('#message').val('');
	})
    .fail(function(data) {
    // Make sure that the formMessages div has the 'error' class.
    $(formMessages).removeClass('success');
    $(formMessages).addClass('error');
    // Set the message text.
    if (data.responseText !== '') {
        $(formMessages).text(data.responseText);
    } else {
        $(formMessages).text('<p>Sorry. An error occured and your message could not be sent.</p>');
    }
    });
                      

	//Pretty Photo
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});	
                      
  });
    
});  

