<!DOCTYPE html>
<html lang="en">

<head>
 <!-- Meta information we are also using a cdn to get jquery-->
 <title> Jeremy Ward IT162</title>
 <meta charset="utf-8" />    
 <meta name="description" content="Jeremy Wards Portal For IT162" />
 <meta name="author" content="Jeremy Ward" />
 <meta name="robots" content="noindex,nofollow" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <link rel="stylesheet" href="css/style.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <!-- Wrapper for everthing -->
    <div class="wrapper">
    <!-- Begin Header-->
    <header id="header">
        <h1>
            Jeremy Ward's IT162 Portal Page
        </h1>
    </header>
    

    <!-- Begin Nav-->
    <nav class="topnav" id="myTopnav">
        <a href="index.html" class='active'>Welcome</a>
        <a href="big/index.html">BIG</a>
        <a href="aia.html">AIA</a>
        <a href="flowchart.html">FlowChart</a>
        <a href="fp/index.html">Final Project</a>
        <a href="contact.php"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> Contact Jeremy</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
    </nav>

        <img class="desktop" src="images/desktop.jpg" style="width: 50%;" alt="This is the large image of an adorable Golden Retriever">
        <img class="tablet" src="images/tablet.jpg" alt="This is the medium image  of an adorable Golden Retriever">
        <img class="phone" src="images/phone.png" alt="this is the small images  of an adorable Golden Retriever">

        <h2 class="subheader">A little about me!</h2>
        <p>
            Hello! This is a little about myself, I am a Xillenial living in Seattle. I work and live in downtown Seattle.
            I like long walks in the wilderness, preferably with a cute doggo. I have been working on learning to code for a about a year now and am enjoying it quite a lot.
            I enjoy web development both front and back end. I am looking forward to learning all about PHP and web development!
            <br><br><br><br>


            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Et malesuada fames ac turpis egestas integer eget aliquet nibh. 
            Lorem mollis aliquam ut porttitor leo a.
            At lectus urna duis convallis convallis tellus id interdum velit. 
            Elementum sagittis vitae et leo duis ut diam quam.
            Sed ullamcorper morbi tincidunt ornare massa eget egestas purus. 
            Et netus et malesuada fames ac turpis egestas integer. 
            Faucibus turpis in eu mi. Ac auctor augue mauris augue neque gravida in fermentum et. 
            Consequat nisl vel pretium lectus. 
            Cursus risus at ultrices mi tempus imperdiet nulla malesuada pellentesque.
            Neque egestas congue quisque egestas diam in arcu cursus euismod. 
            Gravida quis blandit turpis cursus in hac habitasse.
            Sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur. 
            Amet volutpat consequat mauris nunc congue nisi. 
            Sit amet tellus cras adipiscing enim eu turpis egestas. 
            Sed libero enim sed faucibus turpis in eu mi. 
            Ut porttitor leo a diam sollicitudin tempor id eu. 
            Commodo odio aenean sed adipiscing diam donec. Sit amet nulla facilisi morbi. 
            Odio ut sem nulla pharetra diam sit. Pellentesque habitant morbi tristique senectus. 
            Neque sodales ut etiam sit amet. Egestas maecenas pharetra convallis posuere. 
            Sem nulla pharetra diam sit amet nisl suscipit adipiscing bibendum. 
            Ultricies lacus sed turpis tincidunt id aliquet risus feugiat in. 
            Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam nulla facilisi. 
            Augue lacus viverra vitae congue eu. Leo urna molestie at elementum.
        </P>
    </div>

    <!-- Begin Footer-->
    <footer>
        <?php
    
        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "exochos@gmail.com";  //place your/your client's email address here
        $toName = "Jeremy Ward"; //place your client's name here
        $website = "35.226.47.22";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
        <p><small>&copy; 2020 by <a href="contact.php" target="_blank">Jeremy Ward</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
<script src='js/main.js'></script>
<script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    </script>
</body>
</html>