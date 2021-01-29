<?php

/*
jeremy ward 1/29/21
portal-config.php
this holds all of our config information for it 162
*/
ob_start();
//echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

echo THIS_PAGE;
//echo $_SERVER['PHP_SELF'];
//die;

?>
