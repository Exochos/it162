

<!-- Header -->
<?php 
    include('includes/config.php');
    include('includes/header.php');
    session_start();

?>

<!-- Main Content Goes Here -->
<main>
<div class="contact">
<form action="?" method="POST">
<div class="subheader"><?php echo $title; ?></div>
  <p type="Name:"><input placeholder="Write your name here.."> </input></p>
  <p type="Phone:"><input placeholder="Phone Number"> </input></p>
  <p type="Email:"><input placeholder="Email"> </input></p>
  <p type="Message:"><textarea id="text" rows="6" cols="50" value="Enter You Message here!"> </textarea></p>
  <div class="g-recaptcha" data-sitekey="6LcEQ4kaAAAAAMlQrU2brFzS7kPRrGxE-a9t9-1t"></div>
  <br/>
  <input class="submit" type="submit" value="Submit">
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