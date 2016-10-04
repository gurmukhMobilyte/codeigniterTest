$(window).load(function(){
    $('.submit-button').prop("disabled", false);
});

$(document).ready(function(){
	//hadingling form submission
	var options = { 
        beforeSubmit:  showRequest,
        success:       showResponse,
        dataType:  'json'
    };

	//adding datepicker
	$("#dob").datepicker({format: 'yyyy-mm-dd'});

	//jquery form validations
	$("#test_form").validate({
		rules: {
			name: "required",
			dob: "required",
			email: {
				required: true,
				email: true
			},
			favorite_color: "required",
		},
		submitHandler: function() {
			// alert("Submitted!")
			$("#test_form").ajaxSubmit(options);
		}
	});

});

		// pre-submit callback 
		function showRequest(formData, jqForm, options) { 
		   	$('.alert-success, .alert-danger').hide();
		   	$('.alert-success').html('Please wait, submitting form.');
		    return true; 
		} 
		 
		// post-submit callback 
		function showResponse(responseText, statusText, xhr, $form)  {
		    if(responseText.errors)
		    {
		    	$('.alert-danger').show();
		    	$('.alert-danger').html(responseText.errors);
		    }
		    else if( responseText.unknown )
		    {
		    	$('.alert-danger').show();
		    	$('.alert-danger').html(responseText.unknown);
		    }
		    else
		    {
		    	$('.alert-success').show();
		    	$('.alert-success').html(responseText.success);
		    	$('input').val('');
		    }
		}
