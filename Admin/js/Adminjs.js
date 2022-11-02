$(function(){
	$("#login").click(function(){
		var username = $("#username").val();
		var password = $("#password").val();
	

            $.ajax({
				url:'html/login.php',
				method:'POST',
				data:{username:username , 
					  password:password,
					  login:'yes'
				     },
				cache:false,
				// beforeSend:function(){
				// $("#login").val("connecting...");
				// }

				success:function(data){

						var option = {
							distance:'40',
							direction:'left',
							times:'3'
						}
						$('#shakebox').effect('shake', option,400);

						$('#login').val('login');
						$('#error').html('<span class="text-danger">'+ data +'</span>');
				}
			});
		
	});
});