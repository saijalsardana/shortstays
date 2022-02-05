<?php
session_start();
?>

<?php include 'header.php';?>
<div class="container">

       <h1 class="title">Gallery</h1>
       <div class="row gallery">
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/1.jpg" title="Foods" class="gallery-image" data-gallery><img src="images/photos/1.jpg" class="img-responsive"></a></div>
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/2.jpg" title="Coffee" class="gallery-image" data-gallery><img src="images/photos/2.jpg" class="img-responsive"></a></div>
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/3.jpg" title="Travel" class="gallery-image" data-gallery><img src="images/photos/3.jpg" class="img-responsive"></a></div>
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/4.jpg" title="Adventure" class="gallery-image" data-gallery><img src="images/photos/4.jpg" class="img-responsive"></a></div>
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/5.jpg" title="Fruits" class="gallery-image" data-gallery><img src="images/photos/5.jpg" class="img-responsive"></a></div>
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/6.jpg" title="Summer" class="gallery-image" data-gallery><img src="images/photos/6.jpg" class="img-responsive"></a></div>
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/7.jpg" title="Bathroom" class="gallery-image" data-gallery><img src="images/photos/7.jpg" class="img-responsive"></a></div>
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/8.jpg" title="Rooms" class="gallery-image" data-gallery><img src="images/photos/8.jpg" class="img-responsive"></a></div>
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/9.jpg" title="Big Room" class="gallery-image" data-gallery><img src="images/photos/9.jpg" class="img-responsive"></a></div>
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/11.jpg" title="Living Room" class="gallery-image" data-gallery><img src="images/photos/11.jpg" class="img-responsive"></a></div>
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/1.jpg" title="Fruits" class="gallery-image" data-gallery><img src="images/photos/1.jpg" class="img-responsive"></a></div>
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/3.jpg" title="Travel" class="gallery-image" data-gallery><img src="images/photos/3.jpg" class="img-responsive"></a></div>
              
              
       </div>
       <div class="spacer">
              <form class="input-group" action="upload.php" method="POST" enctype="multipart/form-data">
                     <input class="form-control" type="file" name="userfile[]" value="" multiple="">
                     <span class="input-group-btn">
                     <input class="form-control btn btn-default" type="submit" name="submit" value="Upload Your Favourite Moment">
                     </span> 
              </form> 
       </div>
</div>

<?php include 'footer.php';?>

