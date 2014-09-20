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








$uri = 'data:text/html;base64,' . base64_encode($html);
$uri1 = 'data:text/html;charset=utf-8,';
$uri2 = '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
$uri3 = '<meta name="apple-mobile-web-app-status-bar-style" content="black"/>';
$uri4 = '<meta http-equiv="content-type" content="text/html;charset=utf-8"/>';
$uri5 = '<link rel="apple-touch-icon" href=';

echo $uri1;
echo $uri2;
echo $uri3;
echo $uri4;


?>
<a href="<?php print $uri; ?>">GENERATED URL</a>

