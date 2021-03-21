

<!-- Header -->
<?php 
    include('includes/config.php');
    include('includes/header.php');
    session_start();
?>



<!-- Main Content Goes Here -->
<div class="muted">&nbsp;</div>
<video autoplay muted loop id="myVideo" id="myVideo">
  <source src="images/video2.mp4" type="video/mp4">
</video>
<main>
<div class="contact">
<form class="form">
  <h2>CONTACT US</h2>
  <p type="Name:"><input placeholder="Write your name here.."></input></p>
  <p type="Email:"><input placeholder="Phone Number"></input></p>
  <p type="Email:"><input placeholder="Email"></input></p>
  <p type="Message:"><input placeholder="Message"></input></p>
  <button>Send Message</button>
</form>
</div><!-- End Contact form -->

</div>
</main>
<scipt>
    
</script>
<!-- End Main Content -->


<!-- Include footer -->
<?php
    include('includes/footer.php');
?>