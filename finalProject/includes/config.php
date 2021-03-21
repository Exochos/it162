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

function makeLinks($linkArray) {
  $myReturn = '';
  foreach($linkArray as $url => $text) {
      echo "<li>";
      if($url == THIS_PAGE)
      {
      $myReturn .= '<a id="mine" class="active" href="' . $url . '" active>' . $text . '</a>' . PHP_EOL;
    }else{
      $myReturn .= '<a href="' . $url . '">' . $text . '</a>'  . PHP_EOL;
    }    
    echo "</li>";
  }    
  return $myReturn;    
}

?>
