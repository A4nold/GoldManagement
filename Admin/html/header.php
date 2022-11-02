<?php
if(isset($tags)){
    $tag = "html/";
    $tig = "";
  }else{
    $tag = "";
    $tig = "../";
}
require("../php/dbconnect.php");
require("../php/functions.php");
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://localhost/GOLDmanagement/Admin/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://localhost/GOLDmanagement/Admin/css/responsive.css">
<link rel="stylesheet" type="text/css" href="http://localhost/GOLDmanagement/Admin/css/admin.css">
<script src="http://localhost/GOLDmanagement/Admin/js/jquery-3.1.0.min.js"></script>
<script src="http://localhost/GOLDmanagement/Admin/tinymce/js/tinymce/tinymce.min.js"></script>
<script src="http://localhost/GOLDmanagement/Admin/js/bootstrap.min.js"></script>
<script src="http://localhost/GOLDmanagement/Admin/js/Adminjs.js"></script>
<title>DashBoard</title>

<style>
    #error_title{
    color: #FF0000;
    font-size: 20px;
  }

   #error_desc{
    color: #FF0000;
    font-size: 20px;
  }
   #error_cat{
    color: #FF0000;
    font-size: 20px;
  }
   #error_img{
    color: #FF0000;
    font-size: 20px;
  }
   #error_key{
    color: #FF0000;
    font-size: 20px;
  }
</style>
</head>

<body>
	
	<header>
      <nav class="navbar navbar-inverse"><!--open navbar-->
      <div class="container" id="navbar-style"><!-- open container-->
      <div class="navbar-header"><!--open navbar-header-->
      
      <button type="button" class="navbar-toggle collapsed"
      data-toggle="collapse"
      data-target="#collapsemenu"
      aria-expanded="false"
      style="background-color:#000"><!--open button-->
      <span class="sr-only">Toggle Navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
       </button><!--close button-->
       
        <a class="navbar-brand" id="navbar-brand" href="#Gold">GOLD
        <span class="subhead" id="subhead">ADMIN</span></a>

        </div><!-- close navbar header-->

        <div class="collapse navbar-collapse" id="collapsemenu">
        	<ul class="nav navbar-nav" id="nav-ul"><!--open ul-->
        		<li><a href="<?php echo $tag;?>home.php">Home</a></li>
        		<li><a href="<?php echo $tag;?>home.php?add_post.php">Add post</a></li>
        		<li><a href="<?php echo $tag;?>home.php?delete_post.php">Update post</a></li>
        		<li><a href="<?php echo $tag;?>home.php?view_post.php">View post</a></li>
        		<li><a href="<?php echo $tag;?>home.php?update_post.php">Delete post</a></li>
        		<li><a href="<?php echo $tag;?>home.php?add_ads.php">Add ads</a></li>
            <li><a href="<?php echo $tag;?>home.php?logout.php">logout</a></li>
        	</ul><!--close ul-->
        </div>

		</nav>

	</header>
