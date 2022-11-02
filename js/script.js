// JavaScript Document
$(function(){
	$('.carousel').carousel({
		interval:3500,
		pause:false,
		keyboard:false,
		});

	$("#srch").hide();

	$("#srchclk").click(function(){
		$("#srch").toggle();
		$(this).hide();	
		$("#srch").focus();
	});

	$("#srch").focusout(function(){
		$("#srch").toggle();
		$("#srchclk").fadeIn();	
	});

});
