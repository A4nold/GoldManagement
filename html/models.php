<?php require("../header.php");?>


<div class="container-fluid"><!-- open conytainer-->
  <div class="row"><!-- open row1-->
  
   <div class="col-xs-12" ><!-- open col 1-->
      <ul id="listimage" style="padding-right:20px; padding-left:20px;">
       <?php
	       listimage($dbconnect);
	     ?>
      </ul>
   </div><!-- close col 1-->

    <div class="col-xs-12 col-md-10"><!-- open col 2-->
         
          <div class="carousel slide" data-ride="carousel" id="move"><!-- slide open-->
          
          <ol class="carousel-indicators"><!--carousel indicators-->
           <li data-target="#move" data-slide-to="0" class="active"></li>
           <li data-target="#move" data-slide-to="1"></li>
           <li data-target="#move" data-slide-to="2"></li>
           <li data-target="#move" data-slide-to="3"></li>           
          </ol><!--close indicators-->
          
           <div class="carousel-inner">

             <?php
              $query = "select * from model ORDER BY id DESC LIMIT 4";
              $fetch = mysqli_query($dbconnect,$query);
              $row = mysqli_num_rows($fetch);
              $act = 0;
              if($row > 0){
                while($fetchdata = mysqli_fetch_array($fetch)){
                  $act++;
                  $chact = ($act == 1) ? "active" : "" ;
                  $main_photo = $fetchdata['main_photo'];                 
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
            models($dbconnect);
          ?>

    </div><!-- close col 2-->
    
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
          
  </div><!--close row1--> 
 
</div><!-- close contianer-->


</body>
<script src="../js/model.js" type="text/javascript"></script>
</html>