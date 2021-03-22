

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
<form action="?" method="POST">
      <div class="g-recaptcha" data-sitekey="6LcEQ4kaAAAAAMlQrU2brFzS7kPRrGxE-a9t9-1t"></div>
      <br/>
      <input type="submit" value="Submit">
    </form>
</div><!-- End Contact form -->

</div>
</main>
<script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LcEQ4kaAAAAAMlQrU2brFzS7kPRrGxE-a9t9-1t'
        });
      };
</script>
<!-- End Main Content -->


<!-- Include footer -->
<?php
    include('includes/footer.php');
?>