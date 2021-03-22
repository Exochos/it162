

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
  <formset>
  <form action="?" method="POST">
  
    <label for="name">Name:</label><br>
    <input type="text" id="name" placeholder="Write your name here.."> </input><br>
    <label for="phone">Phone Number:</label><br>
    <input type="tel" id="phone" placeholder="Phone Number"></input><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" placeholder="Email"> </input><br>
    <label for="message">Message:</label><br>
    <textarea type="text" id="message" rows="6" cols="50" placeholder="Type your message here!"> </textarea><br>

    <div class="g-recaptcha" data-sitekey="6LcEQ4kaAAAAAMlQrU2brFzS7kPRrGxE-a9t9-1t"></div><br>
    
    <input class="submit" type="submit" value="Submit">

  </form>
  </formset>
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