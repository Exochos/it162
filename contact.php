<?php include('includes/header.php'); ?>
    <!-- Wrapper for everthing -->
    <div class="wrapper" style="display:inline;position:relative;left:5%;top:15%;">
    <div class="spacer" style="width:200px;height:60px;">&nbsp;</div>
        <?php
        include 'includes/contact_include.php'; #site keys & code here
        $toAddress = "exochos@gmail.com";  //place your/your client's email address here
        $toName = "Jeremy Ward"; //place your client's name here
        $website = "35.226.47.22";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements
    ?>
    <div class="spacer" style="width:200px;height:60px;">&nbsp;</div>
    </div>
<?php include('includes/footer.php'); ?>
