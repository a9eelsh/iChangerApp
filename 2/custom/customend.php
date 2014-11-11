<?php
$name = "Test Icon";
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$rand = substr(md5(microtime()),rand(0,26),5);
mkdir("upload/$rand/");

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


$requestraw = '' . htmlspecialchars($_GET["req"]) . '';
$fname = '' . htmlspecialchars($_POST["name"]) . '';
$ficon = '' . htmlspecialchars($_GET["icon"]) . '';

if ( $requestraw == "ipeep" ) {
	$request = "Custom iPeep";
}

if ( $requestraw == "custom" ) {
	$request = "Custom Icon";
}
//echo $_GET["name"];
//echo "\n";
//echo $_GET["switch"]; // if switch on output is on
?>
  <link rel="stylesheet" href="../ui/css/load.css">
  <script src="http://www.lockenfiles.tk/cdn/jquery-1.11.1.min.js"></script>
  <script type="text/javascript">
    $(window).load(function() {
	$(".loader").fadeOut("slow");
    })
  </script>
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
	<!--<script type="text/javascript" src="js/staystand.js"></script>-->
    <link rel="stylesheet" href="../ui/css/load.css">
	  <div class="loader"></div>
        <div class="navbar">
          <div class="navbar-inner">
			      <div class="left sliding"><a href="mainf7.php<?php print $uend; ?>" class="back link"><i class="icon icon-back"></i><span>Back</span></a></div>
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
					<a href="http://ichanger.tk/uriref.php?a=<?php print $endfolder; ?>&p=<?php print $endpicture; ?>&n=<?php print $name; ?>&c=custom&ur=calshow://" class="external link item-link item-content">
						<div class="item-media">
							<img src="http://ichanger.tk/custom/upload/<?php print $endfile; ?>" width="80">
						</div>
						<div class="item-inner">
							<div class="item-title-row">
								<div class="item-title"><?php print $fname; ?></div>
								<div class="item-after">Install</div>
							</div>
							<div class="item-subtitle"><?php print $request; ?></div>
							<div class="item-text">Your <?php print $request; ?>. This page will reset once you leave.</div>
						</div>
					</a>
				</li>
			</ul>
				</div>
	<div class="content-block-title">Notice</div>
    <div class="content-block">
        <p>Icons are deleted off our server after 10 hours of being uploaded to keep our servers happy.</p>
        <p>If you want to use the same picture again, just upload it again.</p>
        <p>Icons are deleted off our server after 10 hours of being uploaded to keep our servers happy.</p>
        <p><a href="#" data-popup=".popup-privacy" class="open-popup close-panel item-link">Tap here for privacy info</a></p>
    </div>
	<div class="content-block-title">(Developer Info)</div>
    <div class="content-block">
        <p><?php echo $result; print $rand; ?></p>
    </div>