<!-- COPYRIGHT 2014 TheLocken LLC All Rights Reserved + DMCA Rights -->
<?php

$appname = '' . htmlspecialchars($_GET["n"]) . '';
$iconfolder = '' . htmlspecialchars($_GET["a"]) . '';
$iconmain = '' . htmlspecialchars($_GET["p"]) . '';
$iconext = '' . htmlspecialchars($_GET["pe"]) . '';
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

//if( $appname == "" && $iconfolder == "" && $iconmain == "" ) {
//  echo "<h1>Invalid Generated Shortcut</h1>\n";
//  echo "<h2>If this shortcut is a stock/premade/example and this message keeps appearing, contact TheLocken LLC iChanger Support from the sidepanel in the iChanger app.</h2>\n";
//  echo "<!-- Error Code [73b68w] -->";
//}

$uri1 = 'data:text/html;charset=utf-8,';
$uri2 = '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
$uri3 = '<meta name="apple-mobile-web-app-status-bar-style" content="black"/>';
$uri4 = '<meta http-equiv="content-type" content="text/html;charset=utf-8"/>';
$uri5 = '<link rel="apple-touch-icon" href="http://ichanger.tk/' . htmlspecialchars($iconmain) . '"';
$uri5S = '<link rel="apple-touch-icon" href="http://ichanger.tk/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) . '' . htmlspecialchars($iconext) . '"';
// . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'16' . htmlspecialchars($iconext) . '
$uri6 = '<link rel="apple-touch-icon" href="http://ichanger.tk/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'16' . htmlspecialchars($iconext) . '" sizes="16x16">';
$uri7 = '<link rel="apple-touch-icon" href="http://ichanger.tk/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'48' . htmlspecialchars($iconext) . '" sizes="48x48">';
$uri8 = '<link rel="apple-touch-icon" href="http://ichanger.tk/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'64' . htmlspecialchars($iconext) . '" sizes="64x64">';
$uri9 = '<link rel="apple-touch-icon" href="http://ichanger.tk/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'72' . htmlspecialchars($iconext) . '" sizes="72x72">';
$uri10 = '<link rel="apple-touch-icon" href="http://ichanger.tk/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'128' . htmlspecialchars($iconext) . '" sizes="128x128">';
$uri11 = '<link rel="apple-touch-icon" href="http://ichanger.tk/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'256' . htmlspecialchars($iconext) . '" sizes="256x256">';
$uri12 = '<link rel="apple-touch-icon" href="http://ichanger.tk/' . htmlspecialchars($iconfolder) . '/' . htmlspecialchars($iconmain) .'512' . htmlspecialchars($iconext) . '" sizes="512x512">';
$uri13 = '<title>' . htmlspecialchars($appname) . '</title>';
$uri14 = '<h1>Press <img src="http://ichanger.tk/ui/simages/dl.png"> or <img src="http://ichanger.tk/ui/simages/plus.png"> then select Add to Homescreen..</h1>';
?>

<a href="<?php echo htmlspecialchars($uri1); echo htmlspecialchars($uri2); echo htmlspecialchars($uri3); echo htmlspecialchars($uri4); echo htmlspecialchars($uri5); echo htmlspecialchars($uri5S); echo htmlspecialchars($uri6); echo htmlspecialchars($uri7); echo htmlspecialchars($uri8); echo htmlspecialchars($uri9); echo htmlspecialchars($uri10); echo htmlspecialchars($uri11); ?>">GENERATED URL</a>

