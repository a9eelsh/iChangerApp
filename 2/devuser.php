<div class="navbar">
          <div class="navbar-inner">
			      <div class="left sliding"><a href="mainf7.php<?php print $uend; ?>" class="back link"><i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">iC2 - Verifying Account...</div>
            <div class="right"><a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a></div>
          </div>
        </div>
<div data-page="index-2" class="page">
<div class="page-content">
<div class="content-block">
<div class="content-block-inner">
<?php
// TheLocken iChanger 2 Authentication Handler and Carrier

	// Convert ?user=USERNAME to USERNAME
$user_name = '' . htmlspecialchars($_GET["user"]) . '';
$user_display = '' . htmlspecialchars($_GET["user"]) . '';

	// take username ($userraw) and turn it into ?user=USERNAME

$uend = "?user=$userraw&user_display=$user_display";
$userraw = '' . htmlspecialchars($_GET["user"]) . '';
	
	// if userraw = "" (no user) set userraw to NULL

if ( $userraw == "" ) {
	$userraw = "NULL";
	$user_display = "Not Logged In";
}

	// print variables in this PHP section so I can see if it works

//print $uend;
//print $userraw;
//print $user_display

?>
<?php



// Test if valid developer user
if ( $user_name == "rosco1502" || $user_name == "luke") {
	// If valid developer echo
		echo "Hello, Developer $user_display. Welcome to iChanger's API and Development Section! ";
		$authresults = 'valid';
		$authrun = 'true';
	}
    // If not valid developer echo
	else {
		//echo "<p>Your not an Authorized Developer, Returning to iChanger.</p>";
		//echo "<p>If you believe that this is an error, please contact support at <a href='mailto:support.ic@thelocken.com'>Support.iC@TheLocken.com</a>";
		$authresults = 'invalid';
		$authrun = 'true';
	}

// If $user_name is empty, tell the user that he/she needs to login
if ( $user_name == "" && $authrun == "true" && $authresults = "invalid") {
	// If not logged in echo
		echo "You are not logged in or your not an Authorized Developer. Returning you to iChanger";
	}
	

$ua = strtolower($_SERVER['HTTP_USER_AGENT']);

if ( strpos($ua,"iphone") || strpos($ua,"ipad") ) {
   if ( strpos($ua,"safari") ) {
      echo('<!--Running in safari on iPhone/iPad-->');
	  $webapp = "false";
	  $viewer = "safari";
   } else if ( substr_count($ua, '/') === 3 ) {
      echo('<!--Running as stand alone WebApp on iPhone/iPad-->');
	  $webapp = "true";
	  $viewer = "webapp";
   }
	   
 
if (isset($_SERVER['HTTP_REFERER'])) // check if referrer is set
{
 //   echo $_SERVER['HTTP_REFERER']; // echo referrer
//}
//else
	echo "<!-- HTTP_REFERER SUCESS -->";
//{
  //  echo 'No referrer set'; // echo failure message
}
 

// open latest_ref.txt
$myfile = fopen("latest_ref.txt", "w") 
	// echo error if failed to open latest_ref.txt
	or die("<p>Error!</p><p>Error Code: HTTP_REF_LATESTREF_OPEN_ERROR</p>");
// HTTP_REFERER
$after = "\n";
$http_ref = $_SERVER['HTTP_REFERER'];
$http_refl = "HTTP_REFERER:\n";
fwrite($myfile, $http_refl);
fwrite($myfile, $http_ref);
fwrite($myfile, $after);
// USER_NAME
$user_namel = "USER_NAME:\n";
fwrite($myfile, $user_namel);
fwrite($myfile, $user_name);
fwrite($myfile, $after);
// USER_DISPLAY
$user_displayl = "USER_DISPLAY:\n";
fwrite($myfile, $user_displayl);
fwrite($myfile, $user_display);
fwrite($myfile, $after);
// LOCAL_IP
$localip = $_SERVER['REMOTE_ADDR'];
$localipl = "LOCAL IP:\n";
fwrite($myfile, $localipl);
fwrite($myfile, $localip);
fwrite($myfile, $after);
// PROXY_IP
$proxyip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$proxyipl = "PROXY IP:\n";
fwrite($myfile, $proxyipl);
fwrite($myfile, $proxyip);
fwrite($myfile, $after);
// IN WEBAPP?
$webappl = "WEB_APP:\n";
fwrite($myfile, $webappl);
fwrite($myfile, $webapp);
fwrite($myfile, $after);
// VIEWER
$viewerl = "BROWSER_VIEWER:\n";
fwrite($myfile, $viewerl);
fwrite($myfile, $viewer);
fwrite($myfile, $after);
// ADD TIMESTAMP
   // Set default TimeLocation to Pacific Time
date_default_timezone_set("America/Los_Angeles");
$timel = "PACIFIC TIME:\n";
$time = date("F j, Y, g:i a", floor(1341111034380/1000));
fwrite($myfile, $timel);
fwrite($myfile, $time);
fwrite($myfile, $after);
fclose($myfile);
}
				
?>
		</div>
				</div>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
	<title>iC2 API AUTH</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="DONT INSTALL HERE!!!">
	<link href="pics/noinstall.png" rel="apple-touch-icon-precomposed">