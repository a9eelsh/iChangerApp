<?php
$dev = '' . htmlspecialchars($_GET["dev"]) . '';
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
if ( strpos($ua,"iphone") || strpos($ua,"ipad") ) {
   if ( strpos($ua,"safari") && $dev == "y" ) { // safari on iPhone/iPad with dev perms
      echo('<meta http-equiv="refresh" content="0; url=http://ichangerapp.com/install.php?ref=ic2main" />');
   } else if ( substr_count($ua, '/') === 3 ) { //stand alone WebApp on iPhone/iPad
      echo('<meta http-equiv="refresh" content="0; url=http://ichangerapp.com/mainf7.php');
   } else if ( substr_count($ua, '/') === 2 ) { //WebView on a iPhone/iPad app
      echo('Unplanned... Contact Devs Please!');
   } else if ( strpos($ua,"safari") ) { // Safari on iPhone/iPad
      echo('<meta http-equiv="refresh" content="0; url=http://www.thelocken.com/ichangerinfo/?dev=n" />');
   } else { //another browser on iPhone/iPad
      echo('<h1>Warning Chrome Dectected, Please Use Safari to Visit or Install iChanger<h1>');
   }
} else { // device other than iPhone/iPad
   echo('<meta http-equiv="refresh" content="0; url=http://www.thelocken.com/ichangerinfo/" />');
}
?>
<title>Loading...</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">