<?php 
/*
 _________________________
|-------------------------|
| iChanger 2 Main Handler |
 \-----------------------/
 / VERY IMPORTANT FILE!! \
|  DO NOT EDIT W/O PERMS  |
 \_______________________/


*/
// Connects to your Database
//mysql_connect("thelocken.com", "", "") 
//	or die(mysql_error()); 
//mysql_select_db("thelocken_test_db")
//	or die(mysql_error());
//Adds one to the counter 
//mysql_query("UPDATE counter SET counter = counter + 1");

//Retreives the current count 
//$count = mysql_fetch_row(mysql_query("SELECT counter FROM counter WHERE refer=''"));
//$ref1 = mysql_fetch_row(mysql_query("SELECT counter FROM counter WHERE refer='" . htmlspecialchars($_GET["ref"]) . "'")); 

//Displays the count on your site
//echo "<!--<p>Count=</p>";
//print $count[0]; 
//echo "<p>Referer=</p>";
//print $ref1[0]; 
//echo "<!-- Copyright TheLocken, LLC 2014 -->";

//if (mysql_error()) {
//  echo "Failed to connect to iChanger Servers! Error Code: " . mysqli_connect_error(); 
//}
?>
<?php
// Variables
// Display Dev-Titles
$dev = '' . htmlspecialchars($_GET["dev"]) . '';
// http://74.125.224.174:6080/php/urlblock.php?vsys=1&cat=7509&title=streaming-media&rulename=Allow%20Student%20Content%20Filtering&uid=30687&url=http://youtube.com%2fMacy%27s
// detect if bypass is enabled, if it is disable fowarding to computer site
$bypass = '' . htmlspecialchars($_GET["b"]) . '';
//if(empty($bypass)){
if ( $bypass == "y" ) {
 $detect = "no";
} else {
 $detect = "yes";
}

// START MAIN FOWARDING
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
if ( strpos($ua,"iphone") || strpos($ua,"ipad") ) {
   if ( strpos($ua,"safari") ) {
      //echo('<!--Running in safari on iPhone/iPad--><h1>To install iChanger 2 press <img src="http://ichangerapp.com/ui/simages/dl.png"> or <img src="http://ichangerapp.com/ui/simages/plus.png"> then select Add to Homescreen..');
   } else if ( substr_count($ua, '/') === 3 ) {
     header('Location: http://www.ichangerapp.com/mainf7.php?dev=' . htmlspecialchars($_GET["dev"]) . '&');
   } else if ( substr_count($ua, '/') === 2 ) {
   } else if ( $bypass == "no" ) {
      header('Location: http://www.ichangerapp.com/chrome.php');
   }
    } else if ( $bypass == "" ) {
        header('Location: http://www.thelocken.com/ichangerinfo/');
    }

?>
<!-- COPYRIGHT 2014 TheLocken LLC All Rights Reserved + DMCA Rights -->
<head>
  <title>iChanger 3</title>
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="iChanger 3">
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
  <script language="JavaScript">
objImage = new Image();
objImage.src='pics/iC2-5.png';
</script>
</head>
	  <noscript>
	  	<meta http-equiv="refresh" content="0;URL='http://ichangerapp.com/enable/javascript.php?no=js'" /> 
	  </noscript>
<script>
if(navigator.userAgent.match('CriOS')) {
    //document.write('<meta http-equiv="refresh" content="0;URL='http://example.com/'" />');
    window.location.replace("http://www.ichangerapp.com/chrome.php");
}
</script>