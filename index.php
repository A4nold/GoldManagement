<?php
$paasdfg = 10;
$index = 10;
require("header.php")
?>

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
              $query = "select * from news ORDER BY id DESC LIMIT 4";
              $fetch = mysqli_query($dbconnect,$query);
              $row = mysqli_num_rows($fetch);
              $act = 0;
              
              if($row > 0){
                while($fetchdata = mysqli_fetch_array($fetch)){
                  $act++;
                  $chact = ($act == 1) ? "active" : "" ;
                  $himage = $fetchdata['hero_image'];
                  $himage = "<img src=images/".$himage." style='max-height:400px;' width='1832' alt='banner1'/>";

                  echo "
                  <div class='item $chact'>$himage
                 <div class='carousel-caption'>
                 <div class='wow fadeInUp' data-wow-offset='0' data-wow-delay='0.3s'>
                   <h3 class='text-left'>Breaking News</h3>
                 </div>
                 </div>
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


           <div class="row"><!--open row-->
  
           <h1 class="text-center" style="color:white;">What's NEW</h1>
           <?php
            indexMusic($dbconnect)
            ?>
        
            <?php
            indexNews($dbconnect)
            ?>
        
            <?php
            indexFashion($dbconnect)
            ?>
          </div>

         </section><!-- section close-->

          <section class="col-xs-12 col-md-2" style="float:right;" id="adindex"> 
             <div class="col-md-12">
            <iframe src="images/IMG_4246.JPG"
          frameborder="0"
          scrolling="no"
          allowtransparency="true"
          width="100%"
          height="400px"
          style="border:0;"
          >
         </iframe>


             
                <img src="images/IMG_3224.jpg" style='height:291px; width:100%;' class='img-content img-responsive center-block'>
              </div>

          </section>

  </div><!--closing row-->

</div><!--closing container-->


<footer class="panel-footer"><!--open footer-->
  <div class="container">
    <section class="col-md-10" id="footer-section">
       <p class="text-center">
       GOLD Management &copy; 2016
       </p>
        <p class="text-center">
       Developed by Ekechi Chinonso Arnold
       Tel no:09099356119
       </p>
    </section>
    <section class="col-md-2" id="follow-us">
<div style"margin:left;">
  <h3 class="text-center">Follow us</h3>
    <ul id="sociallink">
      <li><a href="http://www.facebook.com/GOLDmanagement"><img src="images/fb.png"></a></li>
      <li><a href="http://www.twitter.com/GOLDmanagement"><img src="images/tw.png"></a></li>
      <li><a href="http://www.linked.com/GOLDmanagement"><img src="images/in.png"></a></li>
    </ul>
</div>
    </section>
  </div>
</footer><!--close footer-->
</body>
</html>