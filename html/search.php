<?php 
require("../header.php");
 ?>
</header>
<div class="container">

<?php
if(isset($_GET['stuff'])){
$db = mysqli_connect("localhost" , "root" , "dragonfire123" , "GOLDmanagement" );

if($_GET['stuff'] != ""){
	$stuff = $_GET['stuff'];
	$i = 0;
	$keyword = $stuff;
	$temp = explode (" " , $stuff);
	$query = "SELECT * FROM `products` WHERE";
	
	foreach($temp as $each){
	 $i++;
	  if($i == 1){
		  $query.= " `Keyword` LIKE '%$each%' ";
		  }else{
			   $query.= " AND `Keyword` LIKE '%$each%' ";
			  }
		}
			  $get = mysqli_query($db , $query);
			  $getrow = mysqli_num_rows($get);
			  //echo $getrow;
			  
			  while($fetchdata = mysqli_fetch_array($get)){
				  	$mname = $fetchdata['Name'];
					$mcat = $fetchdata['Categories'];
					$mdes = $fetchdata['Description'];
					$mkey = $fetchdata['Keyword'];
					$mlink = $fetchdata['link'];
					$mimage = $fetchdata['images'];
					
					//$download = "";
					
					echo "<div class='container'><!-- open content container-->
					       <div class='row'><!-- opening row-->
						   <div class='col-xs-12 col-md-10'><!-- opening col-->
						   
					       <div class='media'><!-- opening media-->
							<div class='media-left'>
							  <a href='#'><img class='media-object' src='../images/$mimage'></a>
							</div>
							   <section class='media-body'>
							  <h2 class='media-heading col-md-10 col-xs-12'>$mname</h2>							   											
							    <div class='col-md-10 col-xs-12'>$mcat</div>
							    <div class='col-md-10 col-xs-12'>$mdes</div>
							    <div class='col-md-10 col-xs-12'><a href = '../music/$mlink'>Download</a></div>
																
							   </section>
							</div><!-- closing media -->
							
							</div><!-- closing col -->
							</div><!-- closing row-->
						</div><!-- closing content container -->
					";
				}
			  
			  
	}else{
		echo "<div class='container'><h1><strong>input keyword</strong><h1></div>";
		}
}

?>
</div>
</body>

</html>