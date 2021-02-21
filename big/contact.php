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
      <h5>Photo of me:</h5>

    </div>
  </div>
</div>


<!-- Footer -->
<?php include("includes/footer.php"); ?>
