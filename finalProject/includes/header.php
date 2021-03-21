<?php
?>

<!doctype html>

<html lang="en">
<head>

    <meta charset="utf-8">
    <title>$title</title>
    <meta name="description" content="Kalunai">
    <meta name="author" content="Jeremy Ward">

    <!-- Begin Style Sheets & Imports  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>
    <link rel="stylesheet" href="css/styles.css?v=1.0">
    <script src="https://use.fontawesome.com/ffba7c47d5.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Merienda&display=swap" rel="stylesheet">
    <!-- End Styles -->
    </head>

<!-- Begin Body -->
<body>
    <div class="content">
    <!-- Header -->
    <header class="header">
        <!-- Logo -->
        <a class="logo" href="index.php" style="font-family: 'Dancing Script', cursive;
            font-family: 'Merienda', cursive;padding-right:20px;color:brown;"><b>Kaulanai</b></a>
        <nav>
            <input type="checkbox" id="show-menu-input-checkbox" role="button">
            <label for="show-menu-input-checkbox" id="main-menu-toggler" class="flex-container flex-vcenter flex-hcenter"><div id="main-menu-toggler-icon" class="flex-grow"></div></label>
            <ul class="mainMenu accordion" id="mainMenu">
                <?=makeLinks($nav1)?>  
                <li><a href=""><button style="background-color: orange; font-size:1.2em;border-radius: 10px;padding:10px;"><b>Schedule Now</b></button></a></li>
            </ul> 
        </nav>
    </header> <!-- End Header-->
    <div style="height:100px;">&nbsp;</div>