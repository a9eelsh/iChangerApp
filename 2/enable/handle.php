<?php 
$noraw='' . htmlspecialchars($_GET["no"]) . '';
//print $noenable;
//echo "Hi " . $_GET[ 'js'] . ".";
if ( $noraw=="js" ) {
	$noenable="Javascript";
	$noenable2="Javascript";
	$onetwo="one";
	$isare="is";
}

if ( $noraw=="cookie" ) {
	$noenable="PHP's Cookies";
	$noenable2="Cookies";
	$onetwo="one";
	$isare="are";
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<title>iC2 Please Enable <?php print $noenable2; ?></title>
	<!-- Path to Framework7 Library CSS -->
	<link rel="stylesheet" href="../ui/css/framework7.css">
	<link rel="stylesheet" href="../ui/css/framework7.min.css">
	<link rel="stylesheet" href="../ui/css/framework7.themes.css">
	<!-- Path to TheLocken Core CSS -->
	<link rel="stylesheet" href="../ui/css/f7-2.css">
	<link rel="stylesheet" href="../ui/css/tabs.css">
	<meta name="apple-mobile-web-app-title" content="DONT INSTALL HERE (NOEN)">
	<link href="../pics/noinstall.png" rel="apple-touch-icon-precomposed">
</head>
<div class="statusbar-overlay"></div>

<div class="panel-overlay"></div>

<div class="panel panel-left panel-reveal">
	<div class="content-block">
		<p>Left panel content goes here</p>
	</div>
</div>

<div class="panel panel-right panel-cover">
	<div class="content-block">
		<p>Right panel content goes here</p>
	</div>
</div>

<div class="views">

	<div class="view view-main">

		<div class="navbar">
			<div class="navbar-inner">

				<div class="center sliding">Please Enable <?php print $noenable2; ?></div>
				<div class="right">
					<a href="#" class="link icon-only open-panel"><i class="icon icon-bars"></i></a>
				</div>
			</div>
		</div>

		<div class="pages navbar-through toolbar-through">

			<div data-page="index" class="page">

				<div class="page-content">
					<div class="content-block-title">Notice</div>
					<div class="content-block">
						<div class="content-block-inner">
							<p>NOTICE: This page is here if apple ever makes it possible to turn off Javascript or Cookies for WebApps. iChanger 2 requires that <?php print $noenable2; ?> <?php print $isare; ?> enabled. iC2 is build upon many programing languages, <?php print $onetwo; ?> of which <?php print $isare; ?> <?php print $noenable; ?>. Since <?php print $noenable2; ?> <?php print $isare; ?> not enabled iC2 cannot run, So please enable <?php print $noenable2; ?> to use iChanger.</p>
						</div>
					</div>
					<div class="content-block-title">How?</div>
					<div class="list-block">
						<ul>
							<li>
								<a href="javascript.php?ref=handle" class="item-link">
									<div class="item-content">
										<div class="item-inner">
											<div class="item-title">How do I enable Javascript?</div>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="cookie.php?ref=handle" class="item-link">
									<div class="item-content">
										<div class="item-inner">
											<div class="item-title">How do I enable Cookies?</div>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="restart.php?ref=handle" class="item-link">
									<div class="item-content">
										<div class="item-inner">
											<div class="item-title">I've enabled <?php print $noenable2; ?>, now what?</div>
										</div>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="content-block-title">Side panels</div>
					<div class="content-block">
						<div class="row">
							<div class="col-50"><a href="#" data-panel="left" class="button open-panel">Left Panel</a>
							</div>
							<div class="col-50"><a href="#" data-panel="right" class="button open-panel">Right Panel</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="toolbar">
			<div class="toolbar-inner"><a href="#" class="link">Link 1</a><a href="#" class="link">Link 2</a>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/framework7.min.js"></script>

<script type="text/javascript" src="js/my-app.js"></script>
</body>

</html>