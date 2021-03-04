<?php include("includes/config.php"); ?>
<?php include("includes/header.php"); ?>

  <div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-8">

      <h2>Lightbox Gallery</h2>
    <h3>What is a gallery?</h3>
    <p>Traditionally a gallery is merely a rotating showcase of images, instead of going through and clicking on each image individually, you click on an image and then can advance or retreat along a film roll or gallery line. Or You have a list of thumbnail images and then when you rollover an image you get a larger version, or below your selection when you click or rollover an image you change an image in an element box below the current selection.</p>
    <h3>How do you implement a gallery?</h3>
    <p>This differs between languages and implementation but broadly the idea is that you in some manner one will load all of the images into an array or dictionary or some such. Then when a user clicks on an image, you will find the current location within that array and either display the image below in some box or pop up a large image covering the viewport with the selected image. Then you give the user some selection of left, right, exit, back commands. </p>
    <h3>Lightbox</h3>
    <p>Instead of hand coding a new image gallery just use lightbox! </p>
    <p><a href="https://lokeshdhakar.com/projects/lightbox2/">https://lokeshdhakar.com/projects/lightbox2/</a>
<!--
        <a class="demo" href="images/doggo1.jpg" data-lightbox="gallery">
            <img class="example-image" src="images/doggo1.jpg" alt="image-1">
        </a>
        <a class="demo" href="images/doggo2.jpg" data-lightbox="gallery">
            <img class="example-image" src="images/doggo2.jpg" alt="image-1">
        </a>
        <a class="demo" href="images/doggo3.jpg" data-lightbox="gallery">
            <img class="example-image" src="images/doggo3.jpg" alt="image-1">
        </a>
        <a class="demo" href="images/doggo4.jpg" data-lightbox="gallery">
            <img class="example-image" src="images/doggo4.jpg" alt="image-1">
        </a>
        <a class="demo" href="images/doggo5.jpg" data-lightbox="gallery">
            <img class="example-image" src="images/doggo5.jpg" alt="image-1">
        </a>
        <a class="demo" href="images/doggo6.jpg" data-lightbox="gallery">
            <img class="example-image" src="images/doggo6.jpg" alt="image-1">
        </a>
        <a class="demo" href="images/doggo7.jpg" data-lightbox="gallery">
            <img class="example-image" src="images/doggo7.jpg" alt="image-1">
        </a>
-->
      <br>
    </div>
        <div class="col-sm-4">
            <h2>Smoll Gallery:</h2>
            <a class="demo" href="images/doggo1.jpg" data-lightbox="example-1">
            <img class="example-image" src="images/doggo1_tn.jpg" alt="image-1">
        </a>
        <a class="demo" href="images/doggo2.jpg" data-lightbox="example-1">
            <img class="example-image" src="images/doggo2_tn.jpg" alt="image-1">
        </a>
        <a class="demo" href="images/doggo3.jpg" data-lightbox="example-1">
            <img class="example-image" src="images/doggo3_tn.jpg" alt="image-1">
        </a>
        <a class="demo" href="images/doggo4.jpg" data-lightbox="example-1">
            <img class="example-image" src="images/doggo4_tn.jpg" alt="image-1">
        </a>
        <a class="demo" href="images/doggo5.jpg" data-lightbox="example-1">
            <img class="example-image" src="images/doggo5_tn.jpg" alt="image-1">
        </a>
        <a class="demo" href="images/doggo6.jpg" data-lightbox="example-1">
            <img class="example-image" src="images/doggo6_tn.jpg" alt="image-1">
        </a><br>
        <h3>Resources and Cited:</h3>
        <ul>
        <li>Semenov, Dmitry. “Responsive JavaScript Image Gallery.” PhotoSwipe,<a href="photoswipe.com"> photoswipe.com</a></li>
        </ul>
        
    </div>
    </div>
  </div>
</div>


<!-- Footer -->
<?php include("includes/footer.php"); ?>