<?php

ob_start();
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
date_default_timezone_set('America/Los_Angeles');



// Nav Array
// TODO Refactor into multi-deminsional array.
$nav1['index.php'] = "Home";
$nav1['about.php'] = "About";
$nav1['services.php'] = "Services";
$nav1['blog.php'] = "Blog";
$nav1['contact.php'] = "Contact";
$title = $_SERVER['PHP_SELF'];

switch(THIS_PAGE) {

    case 'index.php' : 
        $title = "Home";
        $logo = 'fa fa-home';
        $PageID = 'Index';
    break;

    case 'about.php' : 
        $title = "About Celeste";
        $logo = 'fa fa-home';
        $PageID = 'About';
    break;

    case 'services.php' : 
        $title = "Services";
        $logo = 'fa fa-home';
        $PageID = 'Services';
    break;

    case 'blog.php' : 
        $title = "Blog";
        $logo = 'fa fa-home';
        $PageID = 'Blog';
    break;

    case 'contact.php' : 
        $title = "Contact Us";
        $logo = 'fa fa-home';
        $PageID = "Contact us!";
    break;

    default: 
    $title = THIS_PAGE;
    $logo = 'fa-home';
    $PageID = 'Welcome';

}




function makeLinks($linkArray) {
  $myReturn = '';
  foreach($linkArray as $url => $text) {
      if($url == THIS_PAGE)
      {
      $myReturn .= '<li><a id="mine" class="active" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    }else{
      $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    }    
    
  }    
  return $myReturn;    
}

?>
