<?php


ob_start();
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
date_default_timezone_set('America/Los_Angeles');



function makeLinks($linkArray) {
  $myReturn = '';
  foreach($linkArray as $url => $text) {
      if($url == THIS_PAGE)
      {//selected page - add class reference
      $myReturn .= '<a class="active" href="' . $url . '">' . $text . '</a>' . PHP_EOL;
    }else{
      $myReturn .= '<a href="' . $url . '">' . $text . '</a>'  . PHP_EOL;
    }    
  }    
  return $myReturn;    
}

$nav1['index.php'] = "Home";
$nav1['about.php'] = "About";
$nav1['services.php'] = "Services";
$nav1['contact.php'] = "Contact";
$nav1['blog.php'] = "Blog";

?>

<!doctype html>
<html lang="en">
<!-- Header -->
<head>

<meta charset="utf-8">

<title> $title </title>
<meta name="description" content="Kaulanai.com">
<meta name="author" content="Jeremy Ward">
<link rel="stylesheet" href="css/styles.css?v=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://use.fontawesome.com/ffba7c47d5.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"></script>

</head>
<!-- End Header -->

<!-- Body -->
<body class="site">
  <div class="hero"></div>
  <!-- Begin Container -->
<header>
  <h1 id="top"><i class="fa fa-pagelines" aria-hidden="true"></i>Kaulanai</h1></header>
  <nav role="navigation">

           <?=makeLinks($nav1)?>   
      <div id="nav-open" class="open-icon">≡</div>
    <!--
    <a class="active" href="index.php">Home</a>
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#contact">Contact</a>
    <a href="#blog">Blog</a>   -->
  <div class="middle"></div>
    <a class="twitter" href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter">&nbsp;</i><span>Twitter</span></a>
    <a class="instagram" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram">&nbsp;</i><span>Instagram</span></a>
  </nav>
<main>
  <section>
  <h1>About Celeste</h1>
  <p class="showcase">
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
  </p>
  <p class="showcase">
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
  </p>
  <p class="showcase">
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
  </p>
  </section>
</main>
<aside>
</aside>
<footer>
  <h4><small> &copy;2020 - <?=date('Y')?> by <a href="contact.php" target="_blank">Jeremy Ward</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></h4>
  
</footer>
</body>
</html>