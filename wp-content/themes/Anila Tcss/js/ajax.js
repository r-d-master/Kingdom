var subscribe = function()
{
	var inputEmail = $('#subscriberEmail').val();
    var isValid = true;
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if(!emailReg.test(inputEmail)){
        isValid = false;
        $("#display").show(function() {
			$(this).text("Enter valid email!");
		});
		setTimeout("$('#display').empty(); ", 6000);
    }
    if(isValid){
        var params = {
            'action'    : 'Subscribe',
            'email'     : inputEmail
        };
        $.ajax({
            type: "POST",
            url: "php/mainHandler.php",
            data: params,
            success: function(response){
            	$('#subscriberEmail').val('');
				$("#display").show(function() {
					var responseObj = jQuery.parseJSON(response);
					if(responseObj.ResponseData) {
						$(this).html(responseObj.ResponseData);
					}
				});
				setTimeout("$('#display').empty(); ", 6000); 
				ResetInput();   
				displayHints();
            }
        });
    }
};
var SendMail = function(){
    var isValid = true;
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if(!emailReg.test($('#email').val()) || $('#email').val() == ""){
        isValid = false;
		$("#mail-message").html("Enter valid email!");
		setTimeout("$('#mail-message').empty(); ", 6000);
    }
    if(isValid){
        var params = {
            'action'    : 'SendMessage',
            'name'      : $('#name').val(),
            'email'     : $('#email').val(),
            'subject'   : 'Email from REKREATO',
            'message'   : $('#message').val()
        };
        $.ajax({
            type: "POST",
            url: "php/mainHandler.php",
            data: params,
            success: function(response){
                if(response){
                    var responseObj = jQuery.parseJSON(response);
                    if(responseObj.ResponseData)
                    {
						$("#mail-message").html(responseObj.ResponseData);
                    }
					setTimeout("$('#mail-message').empty(); ", 6000);
                }  
            },
            error: function (xhr, ajaxOptions, thrownError){
                //xhr.status : 404, 303, 501...
                var error = null;
                switch(xhr.status)
                {
                    case "301":
                        error = "Redirection Error!";
                        break;
                    case "307":
                        error = "Error, temporary server redirection!";
                        break;
                    case "400":
                        error = "Bad request!";
                        break;
                    case "404":
                        error = "Page not found!";
                        break;
                    case "500":
                        error = "Server is currently unavailable!";
                        break;
                    default:
                        error ="Unespected error, please try again later.";
                }
                if(error){
                    alert(error);
                }
            }
        });
    }
};