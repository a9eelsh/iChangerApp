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

$UUID = "6371432E-".$appname."-4111-AE46-C23EDF4ADE9B";

$path = 'http://ichangerapp.com/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'' . htmlspecialchars($iconext) . '';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
$base64raw = base64_encode($data);


$mobileconfig = '<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
<dict>
	<key>PayloadContent</key>
	<array>
		<dict>
			<key>FullScreen</key>
			<false/>
			<key>Icon</key>
			<data>'.$base64raw.'</data>
			<key>IsRemovable</key>
			<true/>
			<key>Label</key>
			<string>'.$appname.'</string>
			<key>PayloadDescription</key>
			<string>Configures settings for a Web Clip</string>
			<key>PayloadDisplayName</key>
			<string>'.$appname.'</string>
			<key>PayloadIdentifier</key>
			<string>com.thelocken.ichanger</string>
			<key>PayloadType</key>
			<string>com.apple.webClip.managed</string>
			<key>PayloadUUID</key>
			<string>'.$uuid.'</string>
			<key>PayloadVersion</key>
			<real>1</real>
			<key>Precomposed</key>
			<true/>
			<key>URL</key>
			<string>'.$appurl.'</string>
		</dict>
	</array>
	<key>PayloadDescription</key>
	<string>iChanger Profile WIP: Shortcut for '.$appname.'. This function is still a Work-In-Progress and is highly experimental if you find any problems please contact us from the menu in iChanger.</string>
	<key>PayloadDisplayName</key>
	<string>iChanger Profile for '.$appname.'</string>
	<key>PayloadIdentifier</key>
	<string>com.thelocken.ichanger.'.$uuid.'</string>
	<key>PayloadOrganization</key>
	<string>TheLocken LLC; iChanger</string>
	<key>PayloadRemovalDisallowed</key>
	<false/>
	<key>PayloadType</key>
	<string>Configuration</string>
	<key>PayloadUUID</key>
	<string>'.$uuid.'</string>
	<key>PayloadVersion</key>
	<integer>1</integer>
</dict>
</plist>';

//header('Content-type: application/x-apple-aspen-config; charset=utf-8');
header("Content-type: plain/text");
header('Content-Disposition: attachment; filename="company.mobileconfig"');
echo $mobileconfig;
?>