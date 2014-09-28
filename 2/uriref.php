<!-- COPYRIGHT 2014 TheLocken LLC All Rights Reserved + DMCA Rights -->
<?php
// This file is here to set the HTTP_REF in urigen.php for improved dectection and
// convert photos to URI Data Photos

$appname = '' . htmlspecialchars($_GET["n"]) . '';
$iconfolder = '' . htmlspecialchars($_GET["a"]) . '';
$iconmain = '' . htmlspecialchars($_GET["p"]) . '';
$iconext = '' . htmlspecialchars($_GET["pe"]) . '';
$appurl = '' . htmlspecialchars($_GET["ur"]) . '';
$v = '' . htmlspecialchars($_GET["v"]) . '';

?>
	  <noscript>
	  	<meta http-equiv="refresh" content="0;URL='http://ichanger.tk/enable/javascript.php?no=js'" /> 
	  </noscript>
	<script type="text/javascript">
		function simClickMain1() {
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
<body onload="simClickMain()">
    <a id="simClickElement" href="uridata.php?n=<?php print $appname; ?>&a=UNSUPPORTED&p=<?php print $src; ?>&pe=UNSUPPORTED&ur=<?php print $appurl; ?>&v=<?php print $v; ?>">ENABLE JAVASCRIPT TO INSTALL APPS</a>
</body>