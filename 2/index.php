<?php
$dev = htmlspecialchars($_GET["dev"]);
$install = htmlspecialchars($_GET["i"]);
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);

$UserID = substr(md5(microtime()),rand(0,26),10);

if ( strpos($ua,"iphone") || strpos($ua,"ipad") ) {
   if ( strpos($ua,"safari") && $install == "y" || $dev == "y" ) { // safari on iPhone/iPad with dev perms
      header('Location: http://ichangerapp.com/install', true, 301);
      exit;
   } else { //another browser on iPhone/iPad
      echo('<h1>Warning Chrome Dectected, Please Use Safari to Visit or Install iChanger<h1>');
   }
} else { // device other than iPhone/iPad
   header('Location: http://www.thelocken.com/ichangerinfo', true, 301);
   exit;
}
?>