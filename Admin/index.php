<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://localhost/GOLDmanagement/Admin/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://localhost/GOLDmanagement/Admin/css/responsive.css">
<link rel="stylesheet" type="text/css" href="http://localhost/GOLDmanagement/Admin/css/admin.css">
<link rel="stylesheet" type="text/css" href="http://localhost/GOLDmanagement/Admin/css/animate.css">
<link rel="stylesheet" type="text/css" href="http://localhost/GOLDmanagement/Admin/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="http://localhost/GOLDmanagement/Admin/css/overwrite.css">
<script src="http://localhost/GOLDmanagement/Admin/js/jquery-3.1.0.min.js"></script>
<script src="http://localhost/GOLDmanagement/Admin/js/bootstrap.min.js"></script>
<script src="http://localhost/GOLDmanagement/Admin/js/Adminjs.js"></script>
<script src="http://localhost/GOLDmanagement/Admin/js/jquery-ui.js"></script>
<script src="http://localhost/GOLDmanagement/Admin/js/wow.min.js"></script>
<title>Untitled Document</title>
</head>

<body>
	<div class="container-fluid">
		<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.5s">
			<div id="shakebox" class="col-md-3 col-sm-9 col-xs-12">
				<h1 id="lgholder">
					<a href="#"><img src="images/logo.png"></a>
				</h1>

					<div id="error" class="text-center"></div>

				<div class="col-md-12" id="loginMsg"><div class="col-md-12" id="Msg"><strong>MESSAGE:</strong> Enter your Login Details</div></div>
				<div id="fmsp"></div>
				<form class="form-horizontal col-md-12 col-xs-12" method="post" id="loginform">


					<div class="form-group">
					<label style="padding-left:0;" class="col-md-12 control-label" for="username">Username</label>
						<input id="username" type="text" class="form-control"/>
					</div>

					<div class="form-group">
					<label style="padding-left:0;" class="col-md-12 control-label" for="password">Password</label>
						<input id="password" type="password" class="form-control"/>
					</div>

					<div class="form-group" id="breakline">

					</div>
					<div class="form-group">
						<input type="button" id="login" name="login" value="login" class="btn btn-primary pull-right"/>
					</div>

					<div class="form-group">
						<input type="button" value="back to site" class="btn btn-danger pull-right"><a href="GOLDmanagement/index.php"></a>
					</div>
				</form>
			</div>
		</div>
			
	</div>
</body>

<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
</script>	
</html>