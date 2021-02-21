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
    $nav1['gallery.php'] = "Gallery";
    $nav1['responsive.php'] = "Responsive vs Mobile";
    $nav1['flexbox.php'] = "Flexbox";
   // $nav1['.php'] = "Other";
    $nav1['accessibility.php'] = "Accessibility";
    $nav1['googlecal.php'] = "Google Calender";
    $nav1['googlemaps.php'] = "Google Maps";
    $nav1['webcam.php'] = "Webcam";
    $nav1['contact.php'] = "Contact";
    

switch(THIS_PAGE) {

    case 'index.php' : 
        $title = "midterm";
        $logo = 'fa-home';
        $PageID = 'Home';
    break;

    case 'gallery.php':
        $title = "gallery";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Gallery Page';
        $logo_color = ' style="color:#0f0"';
    break;

    case 'responsive.php':
        $title = "responsive vs mobile";
        $logo = "fa-universal-access";
        $PageID = 'Gallery';
        $logo_color = ' style="color:#00f"';
    break;

    case 'flexbox.php':
        $title = "flexbox";
        $logo = "fa-universal-access";
        $PageID = 'FlexBox';
        $logo_color = ' style="color:#00f"';
    break;

    case 'accessibility.php':
        $title = "Accessibility";
        $logo = "fa-universal-access";
        $PageID = 'FlexBox';
        $logo_color = ' style="color:#00f"';
    break;

    case 'googlecal.php':
        $title = "google calendar";
        $logo = "fa-universal-access";
        $PageID = 'Google Calendar';
        $logo_color = ' style="color:#00f"';
    break;

    case 'googlemaps.php':
        $title = "google maps";
        $logo = "fa-universal-access";
        $PageID = 'FlexBox';
        $logo_color = ' style="color:#00f"';
    break;

    case 'webcam.php':
        $title = "webcam";
        $logo = "fa-universal-access";
        $PageID = 'FlexBox';
        $logo_color = ' style="color:#00f"';
    break;

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

function makeLinks($linkArray, $logo) {
    $myReturn = '';
    foreach($linkArray as $url => $text) {
        if($url == THIS_PAGE)
        {//selected page - add class reference
            $myReturn .= '<i class="'.$logo.'"></i><a class="nav-item nav-link active" href="' . $url . '">'.$text.'<span class="sr-only">(current)</span></a>' . PHP_EOL;
    	}else{
            $myReturn .= '<a class="nav-item nav-link" href="'. $url . '">' . $text . '</a>' . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>
