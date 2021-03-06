

<!-- Header -->
<?php 
    include('includes/config.php');
    include('includes/header.php');
    session_start();

?>

<!-- Main Content Goes Here -->
<main>
<div class="subheader"><?php echo $title; ?></div>
<div class="contact">
  <form action="?" method="POST">
  
    <label for="name">Name:</label><br>
    <input type="text" id="name" placeholder="Write your name here.."><br>
    <label for="phone">Phone Number:</label><br>
    <input type="tel" id="phone" placeholder="Phone Number"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" placeholder="Email"><br>
    <label for="message">Message:</label><br>
    <textarea id="message" rows="6" cols="50"></textarea><br>
    <div class="g-recaptcha" data-sitekey="6LcEQ4kaAAAAAMlQrU2brFzS7kPRrGxE-a9t9-1t"></div><br>
    <input class="submit" type="submit" value="Submit">

  </form>
</div><!-- End Contact form -->
</main>
<script>
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