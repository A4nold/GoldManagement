<?php require("../header.php");?>
<section class="col-xs-9">
	<form class="form-horizontal">
		<div class="form-group">
			<label class="col-sm-2 control-label" for="firstname"> First Name</label>
		
				<div class="col-sm-10">
					<input type="text" class="form-control" id="firstname" placeholder="FIRST NAME">
				</div>
		</div>	
		<div class="form-group">
			<label class="col-sm-2 control-label" for="lastname"> Last Name</label>
		
				<div class="col-sm-10">
					<input type="text" class="form-control" id="lastname" placeholder="LAST NAME">
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="lastname"> Email</label>
		
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="@mail"><span id="email_feedback" style="color:white;"></span>
				</div>
		</div>	
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<input type="submit" value="submit" class="btn btn-default">
			</div>
		</div>																
	</form>
</section>

<footer>
</footer>

</body>
<script type="text/javascript" src="http://localhost/GOLDmanagement/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="http://localhost/GOLDmanagement/js/contactAjax.js"></script>
</html>