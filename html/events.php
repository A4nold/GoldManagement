<?php require("../header.php");?>

<div class="container-fluid">

  <div class="row">
  	<section class="col-xs-12 col-md-10"> 

  		<div class="carousel slide" data-ride="carousel" id="move">

 		   <ol class="carousel-indicators"><!--carousel indicators-->
           <li data-target="#move" data-slide-to="0" class="active"></li>
           <li data-target="#move" data-slide-to="1"></li>
           <li data-target="#move" data-slide-to="2"></li>
           <li data-target="#move" data-slide-to="3"></li>           
          </ol><!--close indicators-->

          <div class="carousel-inner">

 			<?php
              $query = "select * from event ORDER BY id DESC LIMIT 4";
              $fetch = mysqli_query($dbconnect,$query);
              $row = mysqli_num_rows($fetch);
              $act = 0;
              
              if($row > 0){
                while($fetchdata = mysqli_fetch_array($fetch)){
                  $act++;
                  $chact = ($act == 1) ? "active" : "" ;
                  $hero_image = $fetchdata['hero_image'];
                  $hero_image = "<img src=../images/".$hero_image." style='max-height:400px;' width='1832' alt='banner1'/>";

                  echo "
                  <div class='item $chact'>$hero_image
                 <div class='carousel-caption'><h3 class='text-left'>Breaking News</h3></div>
                </div>";
                }
               

              }
             
            ?>

          </div>

           <a class="left carousel-control" href="#move" role="button" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left"></span>
           </a>
           
           <a class="right carousel-control" href="#move" role="button" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right"></span>
           </a>
  		</div>


         <?php 
          event($dbconnect);
         ?>

  	</section>
    
          <section class="col-xs-12 col-md-2" style="float:right;" id="adindex"> 
             <div class="col-md-12">
            <iframe src="../images/IMG_4246.JPG"
          frameborder="0"
          scrolling="no"
          allowtransparency="true"
          width="100%"
          height="400px"
          style="border:0;"
          >
         </iframe>


             
                <img src="../images/IMG_3224.jpg" style='height:291px; width:100%;' class='img-content img-responsive center-block'>
              </div>

          </section>


  </div>

</div>


<footer>
</footer>

</body>
</html>