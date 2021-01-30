<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta information we are also using a cdn to get jquery-->
  <title> <?=$title?></title>
  <meta charset="utf-8" />    
  <meta name="description" content="Jeremy Wards Portal For IT162" />
  <meta name="author" content="Jeremy Ward" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/form.css" />
  <script src="https://use.fontawesome.com/ffba7c47d5.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src='js/main.js'></script>
</head>
<body>
<header id="header">
        <h1><i class="logo fa <?=$logo?>"<?=$logo_color?>></i>
            <?php echo $title ?></sub>
        </h1>
    
    <nav class="topnav" id="myTopnav">

      <?=makeLinks($nav1)?>   
    <!-- Comment out
        <a href="index.php" class='active'>Welcome</a>
        <a href="big/index.html">BIG</a>
        <a href="aia.html">AIA</a>
        <a href="flowchart.html">FlowChart</a>
        <a href="fp/index.html">Final Project</a>
        <a href="contact.php"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> Contact Jeremy</a>
        End comment out nav -->



        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i>&#9776;</a>
    </nav>
    

</header>