<?php
$taags = 10;
require("header.php");
/*-----------------------------------------------*/

if(isset($_POST['add_post'])){

		//getting the text data from the fields
		$article_name = $_POST['article_name'];
		$hero_image = $_POST['hero_image'];
		$article_description = $_POST['article_description'];
		

		//getting the images from the field
		$hero_image = $_FILES['hero_image']['name'];
		//temporary name for the image
		$hero_image_tmp = $_FILES['hero_image']['tmp_name'];

		// move_uploaded_file($hero_image_tmp, destination)

			$imageName = $_FILES['photo']['name'];
	$path = 'images/';
	$tmp = $_FILES['photo']['tmp_name'];
	$location = $path.$imageName;
	move_uploaded_file($tmp, $location);

		$add_post = "insert into news (article_name, article_description, hero_image) values 
		('$article_name','$article_description','$hero_image')";

		$query = mysqli_query($db,$add_post);

		if($query){

			echo "<script>alert('product has been inserted');</script>";

		}

	}


?>

<style type="text/css"></style>
<div class="content container">
	<div class="row">
		<div class="col-sm-12">
			<h2>ADD NEW POST</h2>
		</div>
			<div class="col-sm-12 col-md-6">
				<form class="form-horizontal" action="add_post.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label class="control-label">POST TITLE</label>
						<input id="article_name" name="article_name" type="text" class="form-control"/>

							<div id="error_title" class="text-center">
							</div>
						
					</div>
				</form>

				

				<form class="form-horizontal" action="add_post.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label class="control-label">HERO IMAGE</label>
						<input id="hero_image" type="file" name="photo" class="form-control"/>

							<div id="error_img" class="text-center">
							</div>
					</div>
				</form>



				<form class="form-horizontal" action="add_post.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label class="control-label">POST DESCRIPTION</label>
						<textarea class="form-control" id="tinyeditor" name="article_description" placeholder="Enter Post" cols="10" rows="10"></textarea>

							<div id="error_desc" class="text-center">
							</div>
					</div>
				</form>


				<!-- <form class="form-horizontal" action="add_post.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label class="control-label">POST CATEGORY</label>
						<select id="post_cat" class="form-control" name="post_cat" required="true">
							<option value="">Select Category</option>
							<option>fashion</option>
							<option>music</option>
							<option>music news</option>
							<option>news</option>
							<option>models</option>
						</select>

						<div id="error_cat" class="text-center">
						</div>
					</div>
				</form>

				<form class="form-horizontal" action="add_post.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label class="control-label">KEYWORDS</label>
						<input id="product_keywords" name="product_keywords" type="text" class="form-control"/>

						<div id="error_key" class="text-center">
						</div>
					</div>
				</form> -->

				<div class="form-group">
					<input type="submit" onclick="validate()" class="btn btn-primary" name="add_post" value="submit now" />
				</div>
				
</footer>
 <script>
	tinymce.init({
		selector:'textarea',
		plugins: 'link, image, imagetools, advlist, media',
	});
 </script>
<script>
	function validate(){
		var value = "";
		
		
		
		
		
		var title = document.getElementById("article_name").value;
		if(title == null || title == ""){
			
			document.getElementById("error_title").innerHTML = "Enter your post title";
			return false;
		}

		 
		

		var image = document.getElementById("hero_image").value;
		if (image == null || image == "")
			{
				document.getElementById("error_img").innerHTML = "select an image";
				document.file.word.focus();
				return false;
			}


		var checkcontrol = document.getElementById('tinyeditor').value;
		
		if (checkcontrol == null || checkcontrol == "")
			{
            document.getElementById("error_desc").innerHTML = "Description of your post";
            return false;
		}


		// var cat = document.getElementById("post_cat").value
		// if(cat == null || cat == ""){
			
		// 	document.getElementById("error_cat").innerHTML = "select a category";
		// 	return false; 
		// }

		// var keywords = document.getElementById("product_keywords").value
		// if(keywords == null || keywords == ""){
			
		// 	document.getElementById("error_key").innerHTML = "input the keywords";
		// 	return false;
		// }
	}
</script>
</html>