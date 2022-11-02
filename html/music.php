<?php require("../header.php");?>


 <div class="container-fluid"><!--opening of the container-->

  <div class="row"><!--opening row-->
         <section class="col-xs-12 col-md-10"><!-- section-->
         
          <div class="carousel slide" data-ride="carousel" id="move"><!-- slide open-->
          
          <ol class="carousel-indicators"><!--carousel indicators-->
           <li data-target="#move" data-slide-to="0" class="active"></li>
           <li data-target="#move" data-slide-to="1"></li>
           <li data-target="#move" data-slide-to="2"></li>
           <li data-target="#move" data-slide-to="3"></li>           
          </ol><!--close indicators-->
          
           <div class="carousel-inner">
             <?php
              $query = "select * from music_home ORDER BY id DESC LIMIT 4";
              $fetch = mysqli_query($dbconnect,$query);
              $row = mysqli_num_rows($fetch);
              $act = 0;
              if($row > 0){
                while($fetchdata = mysqli_fetch_array($fetch)){
                  $act++;
                  $chact = ($act == 1) ? "active" : "" ;
                  $main_photo = $fetchdata['hero_image'];                 
                  $main_photo = "<img src=../images/".$main_photo." style='max-height:400px;' width='1832' alt='banner1'/>";

                  echo "
                  <div class='item $chact'>$main_photo
                 <div class='carousel-caption'></div>
                </div>";
                }
               

              }
             
            ?>

           </div><!-- inner close-->
           
           <a class="left carousel-control" href="#move" role="button" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left"></span>
           </a>
           
           <a class="right carousel-control" href="#move" role="button" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right"></span>
           </a>

          </div><!-- slide close-->

              <?php 
                musicHome($dbconnect);
              ?>

         </section><!-- section close--> 
         
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

  </div><!--closing row-->

</div><!--closing container-->


<footer class="panel-footer"><!--open footer-->
<div class="container"><!--open container-->
 <p class="text-center">
 GOLD Management &copy; 2016
 </p>
  <p class="text-center">
 Developed by Ekechi Chinonso Arnold
 Tel no:09099356119
 </p>

</div><!--close footer-->
</footer><!--close footer-->


</body>

</html>