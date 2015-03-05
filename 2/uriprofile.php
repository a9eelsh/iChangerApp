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
$url = "uridata.php";
if ( $gplus == "yes" ) {
	$gplusurl = "%2B";
}
$UUID =  rand;
$UUID2 =  rand;

$image = file_get_contents('http://ichangerapp.com/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'' . htmlspecialchars($iconext) . '');
$imageData = base64_encode($image);
?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
<dict>
	<key>PayloadContent</key>
	<array>
		<dict>
			<key>FullScreen</key>
			<true/>
			<key>Icon</key>
			</data><?php print $imageData; ?></data>
			<key>IsRemovable</key>
			<true/>
			<key>Label</key>
			<string><?php print $appname; ?></string>
			<key>PayloadDescription</key>
			<string>Configures settings for a Web Clip</string>
			<key>PayloadDisplayName</key>
			<string><?php print $appname; ?></string>
			<key>PayloadIdentifier</key>
			<string><?php print $UUID2; ?></string>
			<key>PayloadType</key>
			<string>com.apple.webClip.managed</string>
			<key>PayloadUUID</key>
			<string><?php print $UUID; ?></string>
			<key>PayloadVersion</key>
			<real>1</real>
			<key>Precomposed</key>
			<true/>
			<key>URL</key>
			<string><?php print $appurl; ?></string>
		</dict>
	</array>
	<key>PayloadDescription</key>
	<string>iChanger Profile WIP: Shortcut for <?php print $appname; ?>. This function is still a Work-In-Progress and is highly experimental if you find any problems please contact us from the menu in iChanger.</string>
	<key>PayloadDisplayName</key>
	<string>iChanger Profile for <?php print $appname; ?></string>
	<key>PayloadIdentifier</key>
	<string>com.thelocken.ichanger.<?php print $UUID; ?></string>
	<key>PayloadOrganization</key>
	<string>TheLocken LLC; iChanger</string>
	<key>PayloadRemovalDisallowed</key>
	<false/>
	<key>PayloadType</key>
	<string>Configuration</string>
	<key>PayloadUUID</key>
	<string><?php print $UUID; ?></string>
	<key>PayloadVersion</key>
	<integer>1</integer>
</dict>
</plist>
