<?php
if(isset($paasdfg)){
	$psed = "html/";
	$psdd = "";
	}else{
		$psed = "";
		$psdd = "../";
		}
    if(isset($index)){
      $thing = "images/";
      $thingie = "";
    }else{
      $thing = "";
      $thingie = "../images/";
    }
require("php/functions.php");
require("php/dbconnet.php");
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://localhost/GOLDmanagement/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://localhost/GOLDmanagement/css/styles.css">
<link rel="stylesheet" type="text/css" href="http://localhost/GOLDmanagement/css/responsive.css">
<link rel="stylesheet" type="text/css" href="http://localhost/GOLDmanagement/css/font-awesome.min.css">
<!-- <link rel="stylesheet" type="text/css" href="http://localhost/GOLDmanagement/css/overwrite.css"> -->
<link rel="stylesheet" type="text/css" href="http://localhost/GOLDmanagement/css/animate.min.css"> 
<script src="http://localhost/GOLDmanagement/js/jquery-3.1.0.min.js"></script>
<script src="http://localhost/GOLDmanagement/js/bootstrap.min.js"></script>
<script src="http://localhost/GOLDmanagement/js/script.js"></script>
<script src="http://localhost/GOLDmanagement/js/parallax.min.js"></script>
<script src="http://localhost/GOLDmanagement/js/wow.min.js"></script>
<script src="http://localhost/GOLDmanagement/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="http://localhost/GOLDmanagement/js/fliplightbox.min.js"></script>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
  tinymce.init({selector:'textarea'});
</script>

<title>Untitled Document</title>
</head>
<body>
          <div id="frame">
            <img src="" alt=""/>
          </div>
  <div id="overlay"></div>
<header>
     <nav class="navbar navbar-inverse navbar-fixed-top"><!--open navbar-->
      <div class="container"><!-- open container-->
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
       
        <a class="navbar-brand" href="#Gold" style="color:#F93;">GOLD
        <span class="subhead" style="color:#000;">management</span></a>



      </div><!-- close navbar header-->



      <div class="collapse navbar-collapse" id="collapsemenu"><!--open collapsebar-->
       <ul class="nav navbar-nav"><!--open ul-->
        <li><a class="active" href="<?php echo $psdd;?>index.php">Home</a></li>
        
        <li><a href="#"
        class="dropdown-toggle"
        data-toggle="dropdown"
        role="button"
        aria-haspopup="true"
        aria-expanded="false">Music
        <span class="caret"></span>
        </a>
         <ul class="dropdown-menu">
          <li><a href="<?php echo $psed;?>music.php">Music Home</a></li>
          
          <li><a href="#"
          class="dropdown-toggle"
          data-toggle="dropdown"
          role="button"
          aria-haspopup="true"
          aria-expanded="false">Artists
          <span class="caret"></span>
          </a>
           <ul class="dropdown-menu">
            <li><a href="#">Alvin Royale</a></li>
            <li><a href="#">Laime</a></li>
            <li><a href="#">Lami</a></li>
           </ul>
          </li>      
        </ul>
        </li>
        
        <li>
        <a href="#"
          class="dropdown-toggle"
          data-toggle="dropdown"
          role="button"
          aria-haspopup="true"
          aria-expanded="false">News
          <span class="caret"></span>
        </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $psed;?>news.php">Home</a></li>
            <li><a href="<?php echo $psed;?>events.php">Events</a></li>
          </ul>
        </li>

        <li><a href="<?php echo $psed;?>fashion.php">Fashion</a></li>
        <li><a href="<?php echo $psed;?>models.php">Models</a></li>
        <li><a href="<?php echo $psed;?>contacts.php">Contact</a></li>        
           <form action="search.php" method="get" id="srchform" class="form">
        <div class="form-group">
          <div class="input-group">
            <span id="srchclk" class="input-group-addon"><span  class="glyphicon glyphicon-search"></span> </span>
             <input class="form-control" value="<?php if(isset($_GET['stuff'])){echo  $_GET['stuff']; }?>" id="srch" type="search" name="stuff" placeholder="SEARCH....">
          </div>
        </div>
      </form>

            
       </ul><!--close ul-->
      </div><!--close collaspebar-->
      </div><!-- close container-->
     </nav><!--close navbar-->

  <div class="content container-fluid"><!-- open iframe container-->
 <iframe src="<?php echo $thing;?>IMG_4246.JPG"
  frameborder="0"
  scrolling="no"
  allowtransparency="true"
  width="100%"
  height="100%"
  style="border:0;"
  >
 </iframe>
 </div><!-- close iframe container-->

</header>
