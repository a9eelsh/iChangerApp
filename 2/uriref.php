<!-- COPYRIGHT 2014 TheLocken LLC All Rights Reserved + DMCA Rights -->
<?php
// This file is here to set the HTTP_REF in urigen.php for improved dectection

$appname = '' . htmlspecialchars($_GET["n"]) . '';
$iconfolder = '' . htmlspecialchars($_GET["a"]) . '';
$iconmain = '' . htmlspecialchars($_GET["p"]) . '';
$iconext = '' . htmlspecialchars($_GET["pe"]) . '';
$appurl = '' . htmlspecialchars($_GET["ur"]) . '';
$v = '' . htmlspecialchars($_GET["v"]) . '';

function _mime_content_type($image) {
    $result = new finfo();

    if (is_resource($result) === true) {
        return $result->file($image, FILEINFO_MIME_TYPE);
    }

    return false;
}
print $result;
// A few settings
$image = '' . $iconfolder . '/' . $iconmain . '' . $iconext . '';
print $image;

// Read image path, convert to base64 encoding
$imageData = base64_encode(file_get_contents($image));

// Format the image SRC:  data:{mime};base64,{data};
$src = 'data: '._mime_content_type($image).';base64,'.$imageData;

// Echo out a sample image
echo '<img src="', $src, '">';

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
    <a id="simClickElement" href="uridata.php?n=<?php print $appname; ?>&a=<?php print $iconfolder; ?>&p=<?php print $iconmain; ?>&pe=<?php print $iconext; ?>&ur=<?php print $appurl; ?>&v=<?php print $v; ?>">ENABLE JAVASCRIPT</a>
</body>