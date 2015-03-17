<?php
$dev = htmlspecialchars($_GET["dev"]);
$install = htmlspecialchars($_GET["i"]);
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);

$UserID = substr(md5(microtime()),rand(0,26),10);

if ( strpos($ua,"iphone") || strpos($ua,"ipad") ) {
   if ( substr_count($ua, '/') === 3 ) {
     header('Location: http://www.ichangerapp.com/mainview.php?id='.$UserID.'', true, 301);
     exit;
   }
} else { // device other than iPhone/iPad
   header('Location: http://www.thelocken.com/ichangerinfo/', true, 301);
   exit;
}

?>
<!-- COPYRIGHT 2015 TheLocken LLC All Rights Reserved + DMCA Rights -->
<head>
  <title>iChanger</title>
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="iChanger">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
  <script type="text/javascript" src="http://ichangerapp.com/js/staystand.js"></script>
  <link rel="stylesheet" type="text/css" href="http://ichangerapp.com/addtohomescreen.css">
  <script src="http://ichangerapp.com/addtohomescreen.js"></script>
  <script src="http://ichangerapp.com/js/staystand.js"></script>
  <!-- Icons -->
  <link rel="apple-touch-icon" href="ios/AppIcon.appiconset/Icon-60@2x.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="ios/AppIcon.appiconset/Icon-60@3x.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="ios/AppIcon.appiconset/Icon-76.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="ios/AppIcon.appiconset/Icon-76@2x.png" />
  <link rel="apple-touch-icon" sizes="58x58" href="ios/AppIcon.appiconset/Icon-Small@2x.png" />
  <!-- End Icons -->
  <script>
  // remove session if visit again
  	addToHomescreen.removeSession()
  // set ath to awalys stay open, etc
    addToHomescreen({
         appID: 'com.thelocken.iChanger',
         privateModeOverride: true,
   		skipFirstVisit: false,
   		maxDisplayCount: 0,
   		debug: true,
   		startDelay: 0,
		lifespan: 0,
		mandatory: true,
    });
  // remove session if visit again
  	addToHomescreen.removeSession()
  </script>
    <script>
    if(navigator.userAgent.match('CriOS')) {
        window.location.replace("http://www.ichangerapp.com/chrome.php");
    }
    </script>
</head>
    <noscript>
        <meta http-equiv="refresh" content="0;URL='http://ichangerapp.com/enable/javascript.php?no=js'" /> 
    </noscript>