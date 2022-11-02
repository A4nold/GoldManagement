<?php
function modelview($db,$mid){
if(isset($_GET['modelid'])){
//$mid = $_GET['modelid'];
			$query1 = "select * from `model` WHERE `id`='$mid' LIMIT 1 ";
			$fetch1 = mysqli_query($db,$query1);
			$row = mysqli_num_rows($fetch1);
			if($row > 0){
				while($fetchdata1 = mysqli_fetch_array($fetch1)){
					$model = $fetchdata1['id'];
					$first_name = $fetchdata1['first_name'];
					$last_name = $fetchdata1['last_name'];
					$dob = $fetchdata1['dob'];
					$description = $fetchdata1['description'];
					$main_photo = $fetchdata1['main_photo'];
					$imgdir = " <img class='img-content img-responsive center-block' src='../images/".$main_photo."'>";
					
					echo"
					<div class='container col-sm-12'><!-- model name-->
   					 <h1 class='text-center'
            			style='color:#FFF'>$first_name $last_name</h1>
  </div><!-- close model name-->
  
  	<div class='container col-sm-12'><!-- open main photo-->
      <img src='../images/$main_photo'
      alt='model main photo'
      width='400' height='200'
       class='img-content img-responsive center-block'>
    </div><!-- close main photo-->
    
    <div class='container'><!-- body container-->
      <div class=row'><!-- open description-->
       <div class='col-sm-9'><!-- open descriptoin-->
       <p class='text-left'
       style='color:#FFF'>
       $description
       </p>
       </div><!-- close description-->
      </div><!-- close description-->
    </div><!--close body container-->
	";				
					
					 
				}
			}
}else{
	header("Location: models.php");
	}
}
/*------------------------------------------------------------------------------------------------------------*/
function newsview($db,$nid){
	if(isset($_GET['newsid'])){
		$query = "select * from `news` WHERE `id`='$nid' LIMIT 1";
		$fetch = mysqli_query($db,$query);
		$row = mysqli_num_rows($fetch);

		if($row > 0){
			while($fetchdata1 = mysqli_fetch_array($fetch)){
			$news = $fetchdata1['id'];
			$article_name = $fetchdata1['article_name'];
			$article_description = $fetchdata1['article_description'];
			$hero_image = $fetchdata1['hero_image'];
			$other_image = $fetchdata1['other_image'];
			$imglocation = "<img style='max-height:400px; width:100%;' class='img-content img-responsive center-block' src='../images/".$hero_image."'>";

			echo"
					<div class='container col-sm-12'><!-- article name-->
   					 <h1 class='text-center'
            			style='color:#FFF'>$article_name</h1>
  </div><!-- close article name-->
  
  	<div class='container col-sm-12'><!-- open main photo-->
      $imglocation
    </div><!-- close main photo-->
    
    <div class='container'><!-- body container-->
      <div class=row'><!-- open description-->
       <div class='col-sm-9'><!-- open descriptoin-->
       <p class='text-left'
       style='color:#FFF'>
       $article_description
       </p>
       </div><!-- close description-->
      </div><!-- close description-->
    </div><!--close body container-->
	";					
			}
		}
	}else{
		echo"";
	}
}
/*-------------------------------------------------------------------------------*/

function listimage($db){
	$query = "select * from `images` order by `id` DESC";
		$fetch = mysqli_query($db,$query);
		while($fetchdata = mysqli_fetch_array($fetch)){
			$mimage = $fetchdata['images'];
			echo"
			<li style='display:inline-block;'><img src='../images/".$mimage."' width='150' height='100'></li>
			";
			}
	
	}
/*---------------------------------------------------------------------------------*/

function models($db){
	$query1 = "select * from `model`";
			$fetch1 = mysqli_query($db,$query1);
			$row = mysqli_num_rows($fetch1);
			if($row > 0){
				while($fetchdata1 = mysqli_fetch_array($fetch1)){
					$model = $fetchdata1['id'];
					$first_name = $fetchdata1['first_name'];
					$last_name = $fetchdata1['last_name'];
					$dob = $fetchdata1['dob'];
					$description = $fetchdata1['description'];
					$main_photo = $fetchdata1['main_photo'];
					$imgdir = " <img style='max-height:200px; width:100%;' class='img-content img-responsive center-block' src='../images/".$main_photo."'>";
					
	echo"<section class='col-xs-6 col-sm-6 col-md-4 col-lg-4'><!-- open col4-->    
      
       <h3 class='text-center'>$first_name $last_name</h3>
       <hr>
		$imgdir
       <p class='text-center'>
        <a href='modelview.php?modelid=$model'>view</a>
       </p>
           
    </section><!-- close col4-->";
					
				}
			}else{
				echo "";	
			}
	}
/*-----------------------------------------------------------------------------------------------------------*/
function news($db){
	$query1 = "select * from `News`";
	$fetch1 = mysqli_query($db,$query1);
	$row = mysqli_num_rows($fetch1);
	
	if($row > 0){
		while($fetchdata1 = mysqli_fetch_array($fetch1)){
			$news = $fetchdata1['id'];
			$article_name = $fetchdata1['article_name'];
			$article_description = $fetchdata1['article_description'];
			$hero_image = $fetchdata1['hero_image'];
			$other_image = $fetchdata1['other_image'];
			$imglocation = "<img style='max-height:200px; width:100%;' class='img-content img-responsive center-block' src='../images/".$hero_image."'>";
		
			echo "<section class='col-xs-6 col-sm-6 col-md-4 col-lg-4'>
            					
              					<h3 class='text-center'>$article_name</h3>
              					<hr>
              					$imglocation
              					<p class='text-center'>
                				<a href='newsview.php?newsid=$news'>Read</a>
              					</p>
              					
         					</section>";
		}
	}
}
/*------------------------------------------------------------------------------------------------------------*/
function musicHome($db){
	$query2 = "select * from `music_home`";
	$fetch2 = mysqli_query($db,$query2);
	$row = mysqli_num_rows($fetch2);

	if($row > 0){
		while($fetchdata2 = mysqli_fetch_array($fetch2)){
			$music_home = $fetchdata2['id'];
			$himage = $fetchdata2['hero_image'];
			$download = $fetchdata2['download'];
			$play = $fetchdata2['play'];
			$description = $fetchdata2['description'];
			$imgsize = "<img style='max-height:200px; width:100%;' class='img-content img-responsive center-block' src='../images/".$himage."'>";
			$download_link = "<a href='../music/".$download."'>download</a>";
			$play_link = "<source src href='../music/".$play."' type='audio/mpeg'>play</a>";
			
			echo"<section class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>

					$imgsize
					<hr>
					<p class='text-left'> $description </p>
					<hr>
					<div class='container-fluid'>$download_link</div>
					<div class='container-fluid'>
						<audio controls>
							$play_link
						</audio>
					</div>
			</section>";
		}
	}
}
/*--------------------------------------------------------------------------------------------------------------*/
function fashion($db){
	$query2 = "select * from `fashion`";
	$fetch2 = mysqli_query($db,$query2);
	$row = mysqli_num_rows($fetch2);

	if($row > 0){
		while($fetchdata2 = mysqli_fetch_array($fetch2)){
			$fashion = $fetchdata2['id'];
			$article_image = $fetchdata2['article_image'];
			$article_name = $fetchdata2['article_name'];
			$article_description = $fetchdata2['article_description'];
			$imgsize = "<img style='max-height:200px; width:100%;' class='img-content img-responsive center-block' src='../images/".$article_image."'>";
			echo"<section class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
					$imgsize
					<h3 class='text-center'>$article_name</h3>
					<hr>
					<p class='text-left'> $article_description 
					<a href='fashionview.php?fashionid=$fashion'>More</a>
					</p>
			</section>";
		}
	}
}
/*------------------------------------------------------------------------------------------------------*/
function fashionview($db,$fid){
if(isset($_GET['fashionid'])){
//$mid = $_GET['modelid'];
			$query1 = "select * from `fashion` WHERE `id`='$fid' LIMIT 1 ";
			$fetch1 = mysqli_query($db,$query1);
			$row = mysqli_num_rows($fetch1);
			if($row > 0){
				while($fetchdata2 = mysqli_fetch_array($fetch1)){
			$fashion = $fetchdata2['id'];
			$article_image = $fetchdata2['article_image'];
			$article_name = $fetchdata2['article_name'];
			$article_description = $fetchdata2['article_description'];
			$imgsize = "<img style='max-height:400px; width:100%;' class='img-content img-responsive center-block' src='../images/".$article_image."'>";
					
					echo"
					<div class='container col-sm-12'><!-- model name-->
   					 <h1 class='text-center'
            			style='color:#FFF'>$article_name</h1>
  </div><!-- close model name-->
  
  	<div class='container col-sm-12'><!-- open main photo-->
      $imgsize
    </div><!-- close main photo-->
    
    <div class='container'><!-- body container-->
      <div class=row'><!-- open description-->
       <div class='col-sm-9'><!-- open descriptoin-->
       <p class='text-left'
       style='color:#FFF'>
       $article_description
       </p>
       </div><!-- close description-->
      </div><!-- close description-->
    </div><!--close body container-->
	";				
					
					 
				}
			}
}else{
	header("Location: models.php");
	}
}
/*-------------------------------------------------------------------------------------------------------------*/
function event($db){
	$query1 = "select * from `event`";
	$fetch1 = mysqli_query($db,$query1);
	$row = mysqli_num_rows($fetch1);
	
	if($row > 0){
		while($fetchdata1 = mysqli_fetch_array($fetch1)){
			$eventid = $fetchdata1['id'];
			$event_name = $fetchdata1['event_name'];
			$event_description = $fetchdata1['event_description'];
			$hero_image = $fetchdata1['hero_image'];
			$other_image = $fetchdata1['other_images'];
			$imglocation = "<img style='max-height:200px; width:100%;' class='img-content img-responsive center-block' src='../images/".$hero_image."'>";
		
			echo "<section class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
            					
              					<h3 class='text-center'>$event_name</h3>
              					<hr>
              					$imglocation
              					<p class='text-left'>
              					$event_description
                				<a href='eventsview.php?eventsid=$event'>Read</a>
              					</p>
              					
         					</section>";
		}
	}
}
/*-----------------------------------------------------------------------------------------------------------*/
function eventsview($db,$eid){
if(isset($_GET['eventsid'])){
//$mid = $_GET['modelid'];
			$query1 = "select * from `event` WHERE `id`='$eid' LIMIT 1 ";
			$fetch1 = mysqli_query($db,$query1);
			$row = mysqli_num_rows($fetch1);
			if($row > 0){
				while($fetchdata1 = mysqli_fetch_array($fetch1)){
					$event = $fetchdata1['id'];
					$event_name = $fetchdata1['event_name'];
					$event_description = $fetchdata1['event_description'];
					$hero_image = $fetchdata1['hero_image'];
					$other_image = $fetchdata1['other_images'];
					$imglocation = "<img style='max-height:400px; width:100%;' class='img-content img-responsive center-block' src='../images/".$hero_image."'>";
					
					echo"
					<div class='container col-sm-12'><!-- model name-->
   					 <h1 class='text-center'
            			style='color:#FFF'>$event_name</h1>
  </div><!-- close model name-->
  
  	<div class='container col-sm-12'><!-- open main photo-->
      $imglocation
    </div><!-- close main photo-->
    
    <div class='container'><!-- body container-->
      <div class=row'><!-- open description-->
       <div class='col-sm-9'><!-- open descriptoin-->
       <p class='text-left'
       style='color:#FFF'>
       $event_description
       </p>
       </div><!-- close description-->
      </div><!-- close description-->
    </div><!--close body container-->
	";				
					
					 
				}
			}
}else{
	header("Location: models.php");
	}
}
/*--------------------------------------------------------------------------------------------------------------*/
function indexMusic($db){
	$query = "select * from `music_home` ORDER BY id DESC LIMIT 1";
	$fetch = mysqli_query($db,$query);
	$row = mysqli_num_rows($fetch);

	if($row > 0){
		while($fetchdata = mysqli_fetch_array($fetch)){
			$himage = $fetchdata['hero_image'];
			$imglocation = "<img style='max-height:200px; width:100%;' class='img-content img-responsive center-block' src='images/".$himage."'>";


			echo "<section class='col-sm-6 col-md-4 col-lg-4'><!--open section-->
 					 <div class='thumbnail'>
   					 <h2 class='text-center'>MUSIC</h2>
    					<hr>
   						$imglocation
   
   						<div class='caption'>
   						<p>
						   
   						   <a href='html/music.php'' role='button' class='btn btn-info'>more</a>
  						 </p>
   						</div>
   					</div>
  				</section><!--close section-->";
		}
	}
}
/*-------------------------------------------------------------------------------------------------------------*/
function indexNews($db){
	$query = "select * from `news` ORDER BY id DESC LIMIT 1";
	$fetch = mysqli_query($db,$query);
	$row = mysqli_num_rows($fetch);

	if($row > 0){
		while($fetchdata = mysqli_fetch_array($fetch)){
			$himage = $fetchdata['hero_image'];
			$imglocation = "<img style='max-height:200px; width:100%;' class='img-content img-responsive center-block' src='images/".$himage."'>";

			echo "<section class='col-sm-6 col-md-4 col-lg-4'><!--open section-->
 					 <div class='thumbnail'>
   					 <h2 class='text-center'>NEWS</h2>
    					<hr>
   						$imglocation
   
   						<div class='caption'>
   						<p>
   						   <a href='html/news.php' role='button' class='btn btn-info'>more</a>
  						 </p>
   						</div>
   					</div>
  				</section><!--close section-->";
		}
	}
}
/*--------------------------------------------------------------------------------------------------------*/
function indexFashion($db){
	$query = "select * from `fashion` ORDER BY id DESC LIMIT 1";
	$fetch = mysqli_query($db,$query);
	$row = mysqli_num_rows($fetch);

	if($row > 0){
		while($fetchdata = mysqli_fetch_array($fetch)){
			$himage = $fetchdata['article_image'];
			$imglocation = "<img style='max-height:200px; width:100%;' class='img-content img-responsive center-block' src='images/".$himage."'>";

			echo "<section class='col-sm-6 col-md-4 col-lg-4'><!--open section-->
 					 <div class='thumbnail'>
   					 <h2 class='text-center'>FASHION</h2>
    					<hr>
   						$imglocation
   
   						<div class='caption'>
   						<p>
   						   <a href='html/fashion.php' role='button' class='btn btn-info'>more</a>
  						 </p>
   						</div>
   					</div>
  				</section><!--close section-->";
		}
	}
}
?>