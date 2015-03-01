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
