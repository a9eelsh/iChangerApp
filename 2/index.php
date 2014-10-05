<?php
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
if ( strpos($ua,"iphone") || strpos($ua,"ipad") ) {
   if ( strpos($ua,"safari") ) {
      echo('<!--Running in safari on iPhone/iPad--><meta http-equiv="refresh" content="0; url=http://ichanger.tk/install.php?ref=ic2main" />');
   } else if ( substr_count($ua, '/') === 3 ) {
      echo('<!--Running as stand alone WebApp on iPhone/iPad--><meta http-equiv="refresh" content="0; url=http://ichanger.tk/mainf7.php');
   } else if ( substr_count($ua, '/') === 2 ) {
      echo('<!--Running in a WebView on a iPhone/iPad app-->');
   } else {
      echo('<!--Running in another browser on iPhone/iPad-->Chrome Dectected');
   }
} else {
   echo('<!--Running on device other than iPhone/iPad.--><meta http-equiv="refresh" content="0; url=http://www.thelocken.com/ichangerinfo/" />');
}
?>
<title>Loading...</title>