<?php 
require("../header.php");
?>

<div class="row">
  <section class="col-xs-12 col-md-10"><!-- main photo container-->

  <?php
  $aid = $_GET['fashionid'];
  fashionview($dbconnect,$aid);
  ?>
  
  </section><!-- close main photo-->
  
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

<footer>
</footer>
</body>
</html>