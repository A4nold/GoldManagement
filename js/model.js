$(function(){

	$("#listimage img").click(function(){
		var src = $(this).attr("src");
		$("#frame img").attr("src", src);
		$("#overlay").fadeIn();
		$("#frame").fadeIn();
	});

	$("#overlay").click(function(){
		$("#frame").fadeOut();
		$("#overlay").fadeOut();
	});

});