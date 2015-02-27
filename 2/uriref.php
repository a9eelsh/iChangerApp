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
$switch = '' . htmlspecialchars($_GET["switch"]) . '';

// Start Switch
//if ( $switch = "yes" ) {
//    $url = "urigen.php";
//} else {
    $url = "uridata.php";
//}

header('Location: 'print $url; '?n='print $appname; '&a='print $iconfolder; '&p='print $iconmain; '&pe='print $iconext; '&ur='print $appurl; '&v='print $v; '&gplus='print $gplus; '&c='print $iconcdir; '', true, 301);
exit;