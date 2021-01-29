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


switch(THIS_PAGE) {
    case 'index.php' : 
        $title = "Jeremy's IT162 Portal Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    case 'contactme.php':
        $title = "Jeremy's Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Jeremy';
    break;

    default: 
    $title = THIS_PAGE;
    $logo = 'fa-home';
    $PageID = 'Welcome';
}
?>
