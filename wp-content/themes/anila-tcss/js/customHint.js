$(document).ready(function() {
		
	displayHints();
	
});

var displayHints = function()
{
	$('#comment-form .name').attachHint('Name *');
	$('#comment-form .email').attachHint('Email *');
	$('#comment-form .subject').attachHint('Subject *');
	$('#comment-form .message').attachHint('Message *');
	
    $('#subscriberEmail').attachHint('Enter your email address');
};
