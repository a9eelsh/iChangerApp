<?php
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
    $result .= "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
    $result .= "Upload: " . $_FILES["file"]["name"] . "<br>";
    $result .= "Type: " . $_FILES["file"]["type"] . "<br>";
    $result .= "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    $result .= "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    if (file_exists("$rand/" . $_FILES["file"]["name"])) {
      $result .= $_FILES["file"]["name"] . " already exists. ";
    } else {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      $result .= "Stored in: " . "$rand/" . $_FILES["file"]["name"];
    }
  }
} else {
	$result .= "FAIL";
}


$myfile = fopen("latest_ref.txt", "w") 
	// $result .= error if failed to open latest_ref.txt
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

print $result;
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <style>
      .statusbar-overlay {
        background: SkyBlue;
      }
    </style>
    <link rel="stylesheet" href="../ui/css/framework7.css">
    <link rel="stylesheet" href="../ui/css/framework7.min.css">
  	<link rel="stylesheet" href="../ui/css/framework7.themes.css">
  </head>
  <body>
    <!-- Status bar overlay for full screen mode (PhoneGap) -->
    <div class="statusbar-overlay"></div>
    <!-- Views -->
    <div class="views">
      <!-- Your main view, should have "view-main" class -->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <!-- We need cool sliding animation on title element, so we have additional "sliding" class -->
            <div class="center sliding">Awesome App</div>
          </div>
        </div>
        <!-- Pages container, because we use fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Page, "data-page" contains page name -->
          <div data-page="index" class="page">
            <!-- Scrollable page content -->
            <div class="page-content">
              <p>Page content goes here</p>
              <!-- Link to another page -->
              <a href="about.html">About app</a>
            </div>
          </div>
        </div>
        <!-- Bottom Toolbar-->
        <div class="toolbar">
          <div class="toolbar-inner">
            <!-- Toolbar links -->
            <a href="#" class="link">Link 1</a>
            <a href="#" class="link">Link 2</a>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../js/framework7.min.js"></script>
    <script type="text/javascript" src="../js/my-app.js"></script>
  </body>
</html> 