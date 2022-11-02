$(function(){

	function validate_email(email){
		
	}
	$("#email").focusin(function(){
		if($("#email").val() === ""){
		$("#email_feedback").text('Enter a valid email address');

		} else {
			validate_email($('#email').val());
		}
	}).blur(function(){
		$('#email_feedback').text('');
	}).keyup(function(){
		validate_email($('#email').val());
	})
})
