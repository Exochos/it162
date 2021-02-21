<?php include("includes/config.php"); ?>
<?php include("includes/header.php"); ?>


<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-8">

    <!-- Wrapper for everthing -->
    <?php
    
    include 'includes/contact_include.php'; #site keys & code here

    $toAddress = "exochos@gmail.com";  //place your/your client's email address here
    $toName = "Jeremy Ward"; //place your client's name here
    $website = "35.226.47.22";  //place NAME of your client's website

    echo loadContact('simple.php');#demonstrates a simple contact form
    //echo loadContact('multiple.php');#demonstrates multiple form elements

?>

    </div>
    <div class="col-sm-4">
    <h2>About Me</h2>
    <img src="images/Jeremy-Profile.jpg" alt="Picture of myself">
    <p>Hello! This is a little about myself, I am a Xillenial living in Seattle. I work and live in downtown Seattle. I like long walks in the wilderness, preferably with a cute doggo. I have been working on learning to code for a about a year now and am enjoying it quite a lot. I enjoy web development both front and back end. I am looking forward to learning all about PHP and web development!</p>
    </div>
  </div>
</div>


<!-- Footer -->
<?php include("includes/footer.php"); ?>
