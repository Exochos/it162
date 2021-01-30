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

//place URL & labels in the array here for navigation:

    $nav1['index.php'] = "Welcome";
    $nav1['big/index.php'] = "Big";
    $nav1['aia.php'] = "AIA";
    $nav1['flowchart.php'] = "Flowchart";
    $nav1['fp/index.php'] = "Final Project";
    $nav1['contact.php'] = "Contact Jeremy";
    

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
        $logo_color = ' style="color:#0f0"';
    break;

    case 'aia.php':
        $title = "Jeremy Final Project Audience, Issues and Approach Research";
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#00f"';


    default: 
    $title = THIS_PAGE;
    $logo = 'fa-home';
    $PageID = 'Welcome';

}

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/

function makeLinks($linkArray) {
    $myReturn = '';
    foreach($linkArray as $url => $text) {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>';
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>
