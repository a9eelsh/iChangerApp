<!-- COPYRIGHT 2014 TheLocken LLC All Rights Reserved + DMCA Rights -->
<?php
/*
 function close_window() {
    close();
}

function close_window(){close()}
*/
$appname = '' . htmlspecialchars($_GET["n"]) . '';
$icondir = '' . htmlspecialchars($_GET["a"]) . '';
$iconcdir = '' . htmlspecialchars($_GET["c"]) . '';
$iconmain = '' . htmlspecialchars($_GET["p"]) . '';
$iconext = '' . htmlspecialchars($_GET["pe"]) . '';
$ur = '' . htmlspecialchars($_GET["ur"]) . '';
// START ICON SIZES
//$icon16l = "$iconfolder $icon16";
$icon16 = '' . htmlspecialchars($_GET["p"]) . '16' . htmlspecialchars($_GET["pe"]) . '';
$icon32 = '' . htmlspecialchars($_GET["p"]) . '32' . htmlspecialchars($_GET["pe"]) . '';
$icon48 = '' . htmlspecialchars($_GET["p"]) . '48' . htmlspecialchars($_GET["pe"]) . '';
$icon64 = '' . htmlspecialchars($_GET["p"]) . '64' . htmlspecialchars($_GET["pe"]) . '';
$icon72 = '' . htmlspecialchars($_GET["p"]) . '72' . htmlspecialchars($_GET["pe"]) . '';
$icon128 = '' . htmlspecialchars($_GET["p"]) . '128' . htmlspecialchars($_GET["pe"]) . '';
$icon256 = '' . htmlspecialchars($_GET["p"]) . '256' . htmlspecialchars($_GET["pe"]) . '';
$icon512 = '' . htmlspecialchars($_GET["p"]) . '512' . htmlspecialchars($_GET["pe"]) . '';

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

// _mime_content_type is unsupported so replace it with FileInfo (Recently Installed To Server)
/* function _mime_content_type($image) {
    $result = new finfo();

    if (is_resource($result) === true) {
        return $result->file($image, FILEINFO_MIME_TYPE);
    }

    return false;
}
 */
print $result;
// A few settings
$image = '' . $iconfolder . '/' . $iconmain . '' . $iconext . '';
print $image;

/* Read image path, convert to base64 encoding
$imageData = base64_encode(file_get_contents($image));

// Format the image SRC:  data:{mime};base64,{data};
$src = 'data: '._mime_content_type($image).';base64,'.$imageData;
*/
// Echo out a sample image
// echo '<img src="', $src, '">';

//if( $appname == "" && $iconfolder == "" && $iconmain == "" ) {
//  echo "<h1>Invalid Generated Shortcut</h1>\n";
//  echo "<h2>If this shortcut is a stock/premade/example and this message keeps appearing, contact TheLocken LLC iChanger Support from the sidepanel in the iChanger app.</h2>\n";
//  echo "<!-- Error Code [73b68w] -->";
//}

$uri1 = 'data:text/html;charset=utf-8,';
$uri2 = '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
$uri3 = '<meta name="apple-mobile-web-app-status-bar-style" content="black"/>';
$uri4 = '<meta http-equiv="content-type" content="text/html;charset=utf-8"/>';
$uri5 = '<script> function close_window(){close()} </script>';
$uri5S = '<link rel="apple-touch-icon" href="http://ichanger.tk/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) . '' . htmlspecialchars($iconext) . '">';
// . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'16' . htmlspecialchars($iconext) . '
$uri6 = '<link rel="apple-touch-icon" href="http://ichanger.tk/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'16' . htmlspecialchars($iconext) . '" sizes="16x16">';
$uri7 = '<link rel="apple-touch-icon" href="http://ichanger.tk/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'48' . htmlspecialchars($iconext) . '" sizes="48x48">';
$uri8 = '<link rel="apple-touch-icon" href="http://ichanger.tk/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'64' . htmlspecialchars($iconext) . '" sizes="64x64">';
$uri9 = '<link rel="apple-touch-icon" href="http://ichanger.tk/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'72' . htmlspecialchars($iconext) . '" sizes="72x72">';
$uri10 = '<link rel="apple-touch-icon" href="http://ichanger.tk/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'128' . htmlspecialchars($iconext) . '" sizes="128x128">';
$uri11 = '<link rel="apple-touch-icon" href="http://ichanger.tk/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'256' . htmlspecialchars($iconext) . '" sizes="256x256">';
$uri12 = '<link rel="apple-touch-icon" href="http://ichanger.tk/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'512' . htmlspecialchars($iconext) . '" sizes="512x512">';
$uri13 = '<title>' . htmlspecialchars($appname) . '' . htmlspecialchars($gplusn) . '</title>';
$uri14 = '<h1>Press <img src="http://ichanger.tk/ui/simages/dl.png"> or <img src="http://ichanger.tk/ui/simages/plus.png"> then select Add to Homescreen..</h1>';
$uri15 = '<a id="launch" href="' . htmlspecialchars($ur) . '">';
$uri16 = '<script> if(!document.referrer){activate()}function activate(){var e=document.getElementById("launch");var t=document.createEvent("MouseEvents");t.initEvent("click",true,true);e.dispatchEvent(t);window.opener=window;var n=window.open(location.href,"_self");n.close()} </script>';
?>
<body onload="simClickMain();">
	  <noscript>
	  	<meta http-equiv="refresh" content="0;URL='http://ichanger.tk/enable/handle.php?no=js'" /> 
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
    <a id="simClickElement" href="<?php echo htmlspecialchars($uri1); echo htmlspecialchars($uri2); echo htmlspecialchars($uri3); echo htmlspecialchars($uri4); echo htmlspecialchars($uri5); echo htmlspecialchars($uri5S); echo htmlspecialchars($uri6); echo htmlspecialchars($uri7); echo htmlspecialchars($uri8); echo htmlspecialchars($uri9); echo htmlspecialchars($uri10); echo htmlspecialchars($uri11); echo htmlspecialchars($uri12); echo htmlspecialchars($uri13); echo htmlspecialchars($uri14); echo htmlspecialchars($uri15); echo htmlspecialchars($uri16); echo htmlspecialchars($uri17); ?>">GENERATED URL</a>
<h1> Generating, Please Wait... </h1>
</body>
