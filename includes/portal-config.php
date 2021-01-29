<?php

/*
jeremy ward 1/29/21
portal-config.php
this holds all of our config information for it 162
*/

ob_start();
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;
switch(THIS_PAGE) {
    case 'index.php' : 
        $title = "Jeremy's IT162 Portal Page";
        $logo = 'fa-home';
        $pageID = 'Welcome';
    break;
    case 'contactme.php':
        $title = "Jeremy's Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Jeremy';
    break;



    default: $title = THIS_PAGE;
}
?>
