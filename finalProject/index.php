<?php 
    session_start();
    include('includes/config.php');
    include('includes/header.php');
    
?>



<!-- Main Content Goes Here -->
<div class="muted">&nbsp;</div>
<video autoplay muted loop id="myVideo">
  <source src="images/video2.mp4" type="video/mp4">
</video>
<main>

<div class="subheader"><?php echo $title; ?></div>


</main>
<!-- End Main Content -->

<?php
    include('includes/footer.php');
?>