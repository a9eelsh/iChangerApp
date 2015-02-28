<?php
$name = "Test Icon";
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$filesize = $_FILES["file"]["size"];
$requestraw = '' . htmlspecialchars($_GET["req"]) . '';
$fname = '' . htmlspecialchars($_POST["name"]) . '';
$ficon = '' . htmlspecialchars($_GET["file"]) . '';
$func = $_POST["func"];
$app = $_POST["app"];
$video = $_POST["video"];
$customuri = $_POST["customuri"];
$rand = substr(md5(microtime()),rand(0,26),5);
// check if folder exists+
if (file_exists($rand)) {
  // folder exists, overlapping can occor
    $resultnotice .= "Our servers are overloaded and cannot upload your icon.";
    $resultnotice .= "Please try again in 10 minutes or contact our report an issue.";
} else {
    mkdir("upload/$rand/");
    $resultnotice .= "We have successfully created your Custom Icon! [UIC, ".$rand."]";
}
//if (empty($filesize)) {
//    $resultnotice .= "Please Choose an Icon to upload.. Redirecting";
//    header('Location: http://www.ichangerapp.com/mainf7.php?error=noicon');
//}


if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    $result .= "Return Code: " . $_FILES["file"]["error"] . "<p></p>";
  } else {
    $result .= "Upload: " . $_FILES["file"]["name"] . "<p></p>";
    $result .= "Type: " . $_FILES["file"]["type"] . "<p></p>";
    $result .= "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<p></p>";
    $result .= "Temp file: " . $_FILES["file"]["tmp_name"] . "<p></p>";
	$result .= "ERROR :$endfile:";
    if (file_exists("$rand/" . $_FILES["file"]["name"])) {
      $result .=  $_FILES["file"]["name"] . " already exists. ";
    } else {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/$rand/" . $_FILES["file"]["name"]);
      $result .=  "<!-- Stored In -->: " . "$rand/" . $_FILES["file"]["name"];
	$endfile = "$rand/" . $_FILES["file"]["name"] . "";
	$endpicture = "" . $_FILES["file"]["name"] . "";
	$endfolder = "$rand";
    }
  }
} else {
	$result .=  "FAIL";
}

$myfile = fopen("latest_ref.txt", "w") 
	// echo error if failed to open latest_ref.txt
	or die("<p>Error!</p><p>Error Code: HTTP_REF_LATESTREF_OPEN_ERROR</p>");
// HTTP_REFERER
$after = "\n";
$terror = $_FILES["file"]["error"];
$terrorl = "Return Code:\n";
fwrite($myfile, $terrorl);
fwrite($myfile, $terror);
fwrite($myfile, $after);
// USER_NAME
$tname = $_FILES["file"]["name"];
$tnamel = "FILE_NAME:\n";
fwrite($myfile, $tnamel);
fwrite($myfile, $tname);
fwrite($myfile, $after);
// USER_DISPLAY
$ttype = $_FILES["file"]["type"];
$ttypel = "FILE_TYPE:\n";
fwrite($myfile, $ttypel);
fwrite($myfile, $ttype);
fwrite($myfile, $after);
// LOCAL_IP
$ttemp = $_FILES["file"]["tmp_name"];
$ttempl = "TEMP_FILE:\n";
fwrite($myfile, $ttempl);
fwrite($myfile, $ttemp);
fwrite($myfile, $after);
// PROXY_IP
$proxyip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$proxyipl = "PROXY IP:\n";
fwrite($myfile, $proxyipl);
fwrite($myfile, $proxyip);
fwrite($myfile, $after);
// IN WEBAPP?
$trand = "$rand";
$trandl = "RANDOM:\n";
fwrite($myfile, $trandl);
fwrite($myfile, $trand);
fwrite($myfile, $after);
// VIEWER
//$viewerl = "BROWSER_VIEWER:\n";
//fwrite($myfile, $viewerl);
//fwrite($myfile, $viewer);
//fwrite($myfile, $after);
// ADD TIMESTAMP
   // Set default TimeLocation to Pacific Time
date_default_timezone_set("America/Los_Angeles");
$timel = "PACIFIC TIME:\n";
$date = date("F j, Y, g:i a", floor(1341111034380/1000));
$time = time();
fwrite($myfile, $timel);
fwrite($myfile, $date);
fwrite($myfile, $after);
fwrite($myfile, $time);
fclose($myfile);
?>
<?php

if ( $requestraw == "ipeep" ) {
	$request = "Custom iPeep";
}

if ( $requestraw == "custom" ) {
	$request = "Custom Icon";
}

$funcnotice = " and open ".$func.".";

// URL SCHEME DATABASE
// APP STORE
if ( $app == "App Store" ) {
  $urls = "itms-apps://itunes.apple.com";
}
// CALENDAR
if ( $app == "Calendar" ) {
  $urls = "calshow://";
}
// FACETIME
if ( $app == "Facetime" ) {
  $urls = "facetime://";
}
// GAMECENTER
if ( $app == "GameCenter" ) {
  $urls = "gamecenter://";
}
// IBOOKS
if ( $app == "iBooks" ) {
  $urls = "ibooks://";
}
// ITUNES
if ( $app == "iTunes" ) {
  $urls = "http://itunes.apple.com";
}
// MAIL
if ( $app == "Mail" ) {
  $urls = "message://";
}
// MAPS
if ( $app == "Maps" ) {
  $urls = "maps://";
}
// MESSAGES
if ( $app == "Messages" ) {
  $urls = "sms://";
}
// MUSIC
if ( $app == "Music" ) {
  $urls = "music://";
}
// PASSBOOK
if ( $app == "Passbook" ) {
  $urls = "shoebox://";
}
// PHONE
if ( $app == "Phone" ) {
  // calls person directly
  $urls = "tel://";
}
// REMINDERS
if ( $app == "Reminders" ) {
  // Undocumented, Apple is against it
  // http://www.iphonehacks.com/2013/10/launch-center-pro-undocumented-urls-apple-apps.html
  $urls = "x-apple-reminder://";
}
// REMOTE
if ( $app == "Remote" ) {
  $urls = "remote://";
}
// SAFARI
if ( $app == "Safari" ) {
  // Run iChanger's BrowerClose.php
  $urls = "http://ichangerapp.com/BrowserClose.php";
}
// VIDEOS
if ( $app == "Videos" ) {
  $urls = "videos://";
}
// CHROME
if ( $app == "Chrome" ) {
  $urls = "googlechrome://";
}
// FACEBOOK
if ( $app == "Facebook" ) {
  $urls = "fb://feed";
}
// TWITTER
if ( $app == "Twitter" ) {
  $urls = "twitter://";
}
// FLIPBOARD
if ( $app == "Flipboard" ) {
  $urls = "flipboard://";
}
// YOUTUBE
if ( $app == "YouTube" ) {
  $urls = "http://www.youtube.com/";
}
// INSTAGRAM
if ( $app == "Instagram" ) {
  $urls = "instagram://app";
}
// SKYPE
if ( $app == "Skype" ) {
  $urls = "skype://";
}
// PHOTOS
if ( $app == "Photos" ) {
  $urls = "photos-redirect://";
}
// GOOGLE
if ( $app == "Google" ) {
  $urls = "googleapp://";
}
// GOOGLE+
if ( $app == "Google+" ) {
  $urls = "gplus://";
}

// URLSCHEME
if ( $app == "URL Scheme" ) {
  $urls = "".$customuri."";
}


//                 ---- START FUNCTIONS ----
// FACEBOOK

// FB YOUR PROFILE
if ( $func == "Your Profile" ) {
  $urls = "fb://profile";
}
// FB FRIENDS LIST
if ( $func == "Friends List" ) {
  $urls = "fb://friends";
}
// FB NOTI LIST
if ( $func == "Notification List" ) {
  $urls = "fb://notifications";
}
// FB NEWS FEED
if ( $func == "News Feed" ) {
  $urls = "fb://feed";
}
// FB EVENTS PAGE
if ( $func == "Events Page" ) {
  $urls = "fb://events";
}
// FB REQUESTS LIST
if ( $func == "Requests List" ) {
  $urls = "fb://requests";
}
// FB NOTES PAGE
if ( $func == "Notes Page" ) {
  $urls = "fb://notes";
}
// FB PHOTO ALBUMS
if ( $func == "Photo Albums" ) {
  $urls = "fb://albums";
}

// YOUTUBE

// YT VIDEO LINK
if ( $func == "Open Video" ) {
  $urls = 'https://www.youtube.com/watch?v='.$video.'';
}

// YT NONE
if ( $app == "YouTube" && $func == "None" ) {
  $urls = 'https://www.youtube.com/';
}


?>
  <link rel="stylesheet" href="../ui/css/load.css">
  <script src="http://www.lockenfiles.tk/cdn/jquery-1.11.1.min.js"></script>
  <script src="../js/staystand.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
  <style>
    .statusbar-overlay {
      background: SkyBlue;
    }
  </style>
    <!-- Path to Framework7 Library CSS -->
    <link rel="stylesheet" href="../ui/css/framework7.css">
    <link rel="stylesheet" href="../ui/css/framework7.min.css">
	<link rel="stylesheet" href="../ui/css/framework7.themes.css">
	<!-- Path to TheLocken Core CSS -->
    <link rel="stylesheet" href="../ui/css/f7-2.css">
    <link rel="stylesheet" href="../ui/css/tabs.css">
	<link rel="stylesheet" href="../ui/css/app.css">
	<link rel="stylesheet" href="../ui/css/nav.css">
	<link rel="stylesheet" href="../ui/css/closex.css">
        <div class="navbar">
          <div class="navbar-inner">
			      <div class="left sliding"><a href="http://ichangerapp.com/mainf7.php" class="back link"><i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">iChanger 2 - Your Custom App Icon</div>
            <div class="right"><a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a></div>
          </div>
        </div>
        <div class="pages navbar-through">
          <div data-page="index-1" class="page">
            <div class="page-content">
		<div class="content-block-title">Your Custom App Icon</div>
		<div class="list-block media-list">
			<ul>
				<li>
					<a href="http://ichangerapp.com/uriref.php?a=<?php print $endfolder; ?>&p=<?php print $endpicture; ?>&n=<?php echo $_POST["title"]; ?>&c=custom&ur=<?php echo $urls; ?>" class="external link item-link item-content">
						<div class="item-media">
							<img src="http://ichangerapp.com/custom/upload/<?php print $endfile; ?>" width="80">
						</div>
						<div class="item-inner">
							<div class="item-title-row">
								<div class="item-title"><?php echo $_POST["title"]; ?></div>
								<div class="item-after">Install</div>
							</div>
							<div class="item-subtitle"><?php print $request; ?></div>
							<div class="item-text">You app will open <?php echo $_POST["app"]; print $funcnotice; ?> <?php echo $resultnotice; ?></div>
						</div>
					</a>
				</li>
			</ul>
				</div>
	<div class="content-block-title">Notice</div>
    <div class="content-block">
        <p>Icons are deleted off our server after 10 hours of being uploaded to keep our servers happy.</p>
        <p><a href="#" data-popup=".popup-privacy" class="open-popup close-panel item-link">Tap here for privacy info</a></p>
    </div>
	<div class="content-block-title">(Developer Info)</div>
    <div class="content-block">
        <p><?php echo $result; ?></p>
    </div>