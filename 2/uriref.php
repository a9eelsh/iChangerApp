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
$url = "uriprofile.php";
if ( $gplus == "yes" ) {
	$gplusurl = "%2B";
}
header('Location: '.$url.'?n='.$appname.'&a='.$iconfolder.'&p='.$iconmain.'&pe='.$iconext.'&ur='.$appurl.'&v='.$v.'&gplus='.$gplus.'&c='.$iconcdir.'', true, 301);
exit;
?>