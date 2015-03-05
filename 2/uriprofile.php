<?php
$appname = '' . htmlspecialchars($_GET["n"]) . '';
$iconfolder = '' . htmlspecialchars($_GET["a"]) . '';
$iconcdir = '' . htmlspecialchars($_GET["c"]) . '';
$iconmain = '' . htmlspecialchars($_GET["p"]) . '';
$iconext = '' . htmlspecialchars($_GET["pe"]) . '';
$appurl = '' . htmlspecialchars($_GET["ur"]) . '';
$v = '' . htmlspecialchars($_GET["v"]) . '';
$gplus = '' . htmlspecialchars($_GET["gplus"]) . '';
$switch = '' . htmlspecialchars($_GET["switch"]) . '';
$gplus = '' . htmlspecialchars($_GET["gplus"]) . '';
if ( $gplus == "yes" ) {
	$gplusn = "%2B";
}
$uploaddir = "upload";
if ( $iconcdir == "custom" ) {
    $iconfolder = ''.$iconcdir.'/'.$uploaddir.'/'.$icondir.'';
} else {
    $iconfolder = ''.$icondir.'';
}
$u1 = rand(15, 15);
$u2 = rand(4, 4);
$u3 = rand(4, 4);
$u4 = rand(12, 12);

$UUID2 =  rand;

$imageraw = 'http://ichangerapp.com/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'' . htmlspecialchars($iconext) . '';
$image = file_get_contents('http://ichangerapp.com/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'' . htmlspecialchars($iconext) . '');
$imageData = base64_encode($image);


$mobileconfig .= '<?xml version="1.0" encoding="UTF-8"?>';
$mobileconfig .= '<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">';
$mobileconfig .= '<plist version="1.0">';
$mobileconfig .= "<dict>";
$mobileconfig .= "	<key>PayloadContent</key>";
$mobileconfig .= "	<array>";
$mobileconfig .= "		<dict>";
$mobileconfig .= "			<key>FullScreen</key>";
$mobileconfig .= "			<true/>";
$mobileconfig .= "			<key>Icon</key>";
$mobileconfig .= "			<data>".$imageraw."</data>";
$mobileconfig .= "			<key>IsRemovable</key>";
$mobileconfig .= "			<true/>";
$mobileconfig .= "			<key>Label</key>";
$mobileconfig .= "			<string>".$appname."</string>";
$mobileconfig .= "			<key>PayloadDescription</key>";
$mobileconfig .= "			<string>Configures settings for a Web Clip</string>";
$mobileconfig .= "			<key>PayloadDisplayName</key>";
$mobileconfig .= "			<string>".$appname."</string>";
$mobileconfig .= "			<key>PayloadIdentifier</key>";
$mobileconfig .= "			<string>".$UUID2."</string>";
$mobileconfig .= "			<key>PayloadType</key>";
$mobileconfig .= "			<string>com.apple.webClip.managed</string>";
$mobileconfig .= "			<key>PayloadUUID</key>";
$mobileconfig .= "			<string>E8A00251-AD63-4C25-9242-A2327D3D88B2</string>";
$mobileconfig .= "			<key>PayloadVersion</key>";
$mobileconfig .= "			<real>1</real>";
$mobileconfig .= "			<key>Precomposed</key>";
$mobileconfig .= "			<true/>";
$mobileconfig .= "			<key>URL</key>";
$mobileconfig .= "			<string>".$appurl."</string>";
$mobileconfig .= "		</dict>";
$mobileconfig .= "	</array>";
$mobileconfig .= "	<key>PayloadDescription</key>";
$mobileconfig .= "	<string>iChanger Profile WIP: Shortcut for ".$appname.". This function is still a Work-In-Progress and is highly experimental if you find any problems please contact us from the menu in iChanger.</string>";
$mobileconfig .= "	<key>PayloadDisplayName</key>";
$mobileconfig .= "	<string>iChanger Profile for ".$appname."</string>";
$mobileconfig .= "	<key>PayloadIdentifier</key>";
$mobileconfig .= "	<string>com.thelocken.ichanger.'.$u1.'-'.$u2'-'.$u3'-'.$u4.'</string>";
$mobileconfig .= "	<key>PayloadOrganization</key>";
$mobileconfig .= "	<string>TheLocken LLC; iChanger</string>";
$mobileconfig .= "	<key>PayloadRemovalDisallowed</key>";
$mobileconfig .= "	<false/>";
$mobileconfig .= "	<key>PayloadType</key>";
$mobileconfig .= "	<string>Configuration</string>";
$mobileconfig .= "	<key>PayloadUUID</key>";
$mobileconfig .= "	<string>E8A00251-AD63-4C25-9242-A2327D3D88B2</string>";
$mobileconfig .= "	<key>PayloadVersion</key>";
$mobileconfig .= "	<integer>1</integer>";
$mobileconfig .= "</dict>";
$mobileconfig .= "</plist>";

header('Content-type: application/x-apple-aspen-config; chatset=utf-8');
header('Content-Disposition: attachment; filename="iChangerProfile.mobileconfig"');
echo $mobileconfig;
?>