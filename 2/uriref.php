<!-- COPYRIGHT 2014 TheLocken LLC All Rights Reserved + DMCA Rights -->
<?php
// This file is here to set the HTTP_REF in urigen.php/uridata.php for improved dectection and
// convert photos to URI Data Photos

$appname = '' . htmlspecialchars($_GET["n"]) . '';
$iconfolder = '' . htmlspecialchars($_GET["a"]) . '';
$iconcdir = '' . htmlspecialchars($_GET["c"]) . '';
$iconmain = '' . htmlspecialchars($_GET["p"]) . '';
$iconext = '' . htmlspecialchars($_GET["pe"]) . '';
$appurl = '' . htmlspecialchars($_GET["ur"]) . '';
$v = '' . htmlspecialchars($_GET["v"]) . '';
$gplus = '' . htmlspecialchars($_GET["gplus"]) . '';
if ( $gplus == "yes" ) {
	$gplusurl = "%2B";
}

echo "<h1>Generating Shortcut...</h1>";

$switch = '' . htmlspecialchars($_GET["switch"]) . '';

// Start Switch
//if ( $switch = "yes" ) {
//    $url = "urigen.php";
//} else {
    $url = "uridata.php";
//}

print $url;

?>
	  <noscript>
	  	<meta http-equiv="refresh" content="0;URL='http://ichanger.tk/enable/javascript.php?no=js'" /> 
	  </noscript>
	<script type="text/javascript">
		function simClickMain() {
        var link1 = document.getElementById('simClickElement');
        if (link1.click) {
            link1.click();
        }
        // For Safari on Mac OS. Also works with Chrome, and Firefox but not IE.
        else if (document.createEvent) {
            var event = document.createEvent("MouseEvent");
            event.initEvent("click", true, true);
            link1.dispatchEvent(event);
        }
    }
	</script>
<body onload="simClickMain();">
    <a id="simClickElement" href="<?php print $url; ?>?n=<?php print $appname; ?>&a=<?php print $iconfolder; ?>&p=<?php print $iconmain; ?>&pe=<?php print $iconext; ?>&ur=<?php print $appurl; ?>&v=<?php print $v; ?>&gplus=<?php print $gplus; ?>&c=<?php print $iconcdir; ?>">ENABLE JAVASCRIPT TO INSTALL APPS</a>
<h1> Generating Your Icon, Please Wait... </h1>
</body>