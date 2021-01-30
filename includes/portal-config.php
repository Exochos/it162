<?php

/*
jeremy ward 1/29/21
portal-config.php
this holds all of our config information for it 162
*/
//echo THIS_PAGE;


ob_start();
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
date_default_timezone_set('America/Los_Angeles');
$logo_color = '';

switch(THIS_PAGE) {

    case 'index.php' : 
        $title = "Jeremy's IT162 Portal Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;

    case 'contact.php':
        $title = "Jeremy's Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Jeremy';
        $logo_color = ' style="color:#0f0';
    break;

    case 'aia.php':
        $title = "Jeremy Final Project Audience, Issues and Approach Research";
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#00f';


    default: 
    $title = THIS_PAGE;
    $logo = 'fa-home';
    $PageID = 'Welcome';

}
?>
