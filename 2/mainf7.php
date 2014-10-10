<?php

// Echo Dynamic Global Version Text File
$vfile = "version.txt";
$fh = fopen($vfile, 'r');
$version = fread($fh, filesize($vfile));
fclose($fh);
// echo $version;

$devmode = '' . htmlspecialchars($GET_["devmode"]) . '';

// Start session
session_start();
//if ( $devmode == "true" ) {
//	$devmodedis = "Enabled";
//	echo "<!-- DEVMODE ENABLED -->";
//	$_SESSION['sess_user_id'] = "DEVMODE";
//}

// Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) == '')) {
	//header("location: login.html");
	//exit();
	echo "<!--DEV-->";
}


$devmodel = "Dev Mode $devmodedis";

?>
<?php
// TheLocken iChanger 2 Authentication Handler and Carrier

// !!!!! THIS ATTEMPT HAS FAILED TO CARRY ACCROSS PAGES !!!!!
// !!!!! DUE TO HOW FRAMEWORK7 LOADS PAGES USIfNG AJAX   !!!!!
// !!!!!        THIS DOES NOT FUNCTION ANYMORE          !!!!!

	// Convert ?user=USERNAME to USERNAME
$user_name = '' . $_SESSION['sess_user_id'] . '';
$user_name0 = '' . htmlspecialchars($_GET["user"]) . '';
$user_display = '' . $_SESSION['sess_user_id'] . '';
$user_display0 = '' . htmlspecialchars($_GET["user"]) . '';


	// take username ($userraw) and turn it into ?user=USERNAME


$uend = "?user=$userraw&user_display=$user_display";
$userraw0 = '' . htmlspecialchars($_GET["user"]) . '';
$userraw = '' . $_SESSION['sess_user_id'] . '';

	// if userraw = "" (no user) set userraw to NULL

if ( $userraw == "" ) {
	$userraw = "NULL";
	$user_display = "Not Logged In";
}

?>
<!DOCTYPE html>
<!-- COPYRIGHT 2014 TheLocken LLC All Rights Reserved + DMCA Rights -->
<html>
  <head>
    <link href="http://www.lockenfiles.tk/cdn/h5form/test/qunit.css" rel="stylesheet" />
    <link href="http://www.lockenfiles.tk/cdn/h5form/style0000000.css" media="screen" rel="stylesheet" type="text/css" />
	<style>
		.ui-state-error {
			background-color:#BB1100;
			color:white;
		}
	</style>
  	<script src="http://www.lockenfiles.tk/cdn/jquery-1.11.1.min.js"></script>  
	<script src="http://www.lockenfiles.tk/cdn/h5form/jquery.h5validate.js"></script>
	<script>
		$(document).ready(function () {
    	$('form').h5Validate();
		});
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>iChanger 2</title>
    <!-- Path to Framework7 Library CSS -->
    <link rel="stylesheet" href="ui/css/framework7.css">
    <link rel="stylesheet" href="ui/css/framework7.min.css">
	<link rel="stylesheet" href="ui/css/framework7.themes.css">
	<!-- Path to TheLocken Core CSS -->
    <link rel="stylesheet" href="ui/css/f7-2.css">
    <link rel="stylesheet" href="ui/css/tabs.css">
    <style>
    .statusbar-overlay {
      background: SkyBlue;
    }
  </style>
	<link rel="stylesheet" href="ui/css/app.css?v=9">
	<link rel="stylesheet" href="ui/css/nav.css">
	<link rel="stylesheet" href="ui/css/closex.css">
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
	<script type="text/javascript">
		function simClickMain2() {
        var link1 = document.getElementById('simClickElement2');
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
      <!--<script type="text/javascript" src="js/staystand.js"></script>-->
    <link rel="stylesheet" href="ui/css/load.css">
    <script type="text/javascript">
	    $(window).load(function() {
		$(".loader").fadeOut("slow");
	    })
    </script>
	<script type="text/javascript">
	// Load Heavy files so no half-loaded images appear
		Image1= new Image(175,50)
		Image1.src = "http://ichanger.tk/AppStore/lightOLD.png"
		
		Image2 = new Image(25,30)
		Image2.src = "http://ichanger.tk/Instagram/InstagramDefault.png"
		
		Image3 = new Image(256,256)
		Image3.src = "http://ichanger.tk/Instagram/FlatGradient.png"

		// End Hiding -->
	</script>
	<script>
		function slowLoad() {
	    	$(window).load(function() {
			$(".loader").fadeOut("slow");
	    	})
		}
	</script>
	</head>
  <body onload="simClickMain()">
	  <noscript>
	  	<meta http-equiv="refresh" content="0;URL='http://ichanger.tk/enable/javascript.php?no=js'" /> 
	  </noscript>
	<div class="loader"></div>
    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Left panel with reveal effect--> 



  <meta name="apple-mobile-web-app-title" content="DONT INSTALL HERE">
  <link href="pics/noinstall.png" rel="apple-touch-icon-precomposed">




<div class="panel-overlay"></div>
<div class="panel panel-left panel-cover layout-dark">
<div class="content-block-title"><?php print $devmodel; ?></div>
<div class="list-block">
<ul>
<li><a href="#" data-popup=".popup-privacy" class="open-popup close-panel item-link">
<div class="item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Privacy Policy</div>
</div>
</div></a></li>
<li><a href="popover.html" class="close-panel item-link">
<div class="item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Popover</div>
</div>
</div></a></li>
<li><a href="tabs.html" class="close-panel item-link">
<div class="item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Tabs</div>
</div>
</div></a></li>
<li><a href="panels.html" class="close-panel item-link">
<div class="item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Side Panels</div>
</div>
</div></a></li>
<li><a href="api.php" class="external close-panel item-link">
<div class="item-content">
<div class="item-media"><i class="icon icon-menu-api"></i></div>
<div class="item-inner">
<div class="item-title">Dev API</div>
</div>
</div></a></li>
<li><a href="forms.html" class="close-panel item-link">
<div class="item-content">
<div class="item-media"><i class="icon icon-menu-submitatheme"></i></div>
<div class="item-inner">
<div class="item-title">Sumbit a Theme</div>
</div>
</div></a></li>
<li><a onclick="simClickMain2();" href="#" class="close-panel item-link">
<div class="item-content">
<div class="item-media"><i class="icon icon-menu-tutorial"></i></div>
<div class="item-inner">
<div class="item-title">Quick Tutorial</div>
</div>
</div></a></li>
<li><a href="http://bit.ly/iC2newissue" class="item-link close-panel">
<div class="item-content">
<div class="item-media"><i class="icon icon-menu-reportaproblem"></i></div>
<div class="item-inner">
<div class="item-title">Report Bug<span> or Issue</span></div>
</div>
</div></a></li>
<li><a href="#" data-popup=".popup-about" class="open-popup close-panel item-link">
<div class="item-content">
<div class="item-media"><i class="icon icon-menu-about"></i></div>
<div class="item-inner">
<div class="item-title">About <span> Credits</span></div>
</div>
</div></a></li>
<li><a href="navbars-toolbars.html" class="close-panel item-link">
<div class="item-content">
<div class="item-media"><i class="icon icon-menu-privacy"></i></div>
<div class="item-inner">
<div class="item-title">Terms of Service</div>
</div>
</div></a></li>
<li><a href="#" data-popup=".popup-privacy" class="open-popup close-panel item-link">
<div class="item-content">
<div class="item-media"><i class="icon icon-menu-privacy"></i></div>
<div class="item-inner">
<div class="item-title">Privacy Policy</div>
</div>
</div></a></li>
</ul>
<div class="content-block">
<p>
<?php
echo "v";
print $version;
?>
</p>
    </div>
    </div>
    </div>
	
    <!-- 

         Right panel with cover effect

     -->
    <div class="panel panel-right panel-cover">
      <div class="content-block">
        <p>Right panel content goes here</p>
      </div>
    </div>
	  <!--









        -->
    <!-- Views, and they are tabs-->
    <!-- We need to set "toolbar-through" class on it to keep space for our tab bar-->
    <div class="views tabs toolbar-through">
      <!-- Your first view, it is also a .tab and should have "active" class to make it visible by default-->
      <div id="view-1" class="view tab">
        <!-- We can make with view with navigation, let's add Top Navbar-->
		  <!--

 

                  Home 



           -->
        <div class="navbar">
          <div class="navbar-inner">
            <div class="center sliding">iChanger - Home</div>
            <div class="right"><a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a></div>
          </div>
        </div>
        <div class="pages navbar-through">
          <div data-page="index-1" class="page">
            <div class="page-content">
              <div class="content-block">
                <p>Welcome Home.</p>
              </div>
              <div class="list-block">
                <ul>
                  <li><a href="about.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-inner">
                          <div class="item-title">About Us</div>
                        </div>
                      </div></a></li>
                  <li><a href="services.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-inner">
                          <div class="item-title">Services</div>
                        </div>
                      </div></a></li>
                </ul>
                <center><iframe src="http://nlalonde.github.com/commits-widget/index.html?owner=rosco1502&repo=iChanger-2&limit=6&width=500&height=200" width="502px" height="202px"></iframe></center>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Second view (for second wrap)-->
      <div id="view-2" class="view tab">
        <!-- We can make with view with navigation, let's add Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
			  <!--


                   How To


              -->
            <div class="center sliding">iChanger - How To</div>
            <div class="right"><a href="#" class="open-panel link icon-only"><i class="icon icon-menu"></i></a></div>
          </div>
        </div>
        <div class="pages navbar-through">
          <div data-page="index-2" class="page">
            <div class="page-content">
              <div class="content-block">
                <p>This is a second view. Lets, for example, have here some internal pages with navbar navigation</p>
              </div>
              <div class="list-block">
                <ul>
                  <li><a href="about.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-inner">
                          <div class="item-title">About Us</div>
                        </div>
                      </div></a></li>
                  <li><a href="services.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-inner">
                          <div class="item-title">Services</div>
                        </div>
                      </div></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="view-3" class="view view-main tab active">
        <!-- We can make with view with navigation, let's add Top Navbar-->
		  
		  <!--



              Apps



          -->
        <div class="navbar">
          <div class="navbar-inner">
            <div class="center sliding">iChanger - Apps 
            <?php 
            $dev = '' . htmlspecialchars($_GET["dev"]) . ''; 
            if(empty($dev)) {
              echo"";
              
            } else {
              echo"- Dev Mode";
            }
            
            ?></div>
            <div class="right"><a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a></div>
          </div>
        </div>
        <div class="pages navbar-through">
          <div data-page="index-3" class="page">
            <div class="page-content">
              <div class="content-block">
                Apps To Theme!
              </div>
              <div class="list-block">
                <ul>
                  <li><a href="appStoref7.php" target="_blank" onclick="slowLoad()" class="close-panel item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-appstore"></i></div>
                        <div class="item-inner">
                          <div class="item-title">App Store - WORKING</div>
						<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="calendarf7.php<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-calendar"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Calendar - NEW</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="tabs.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-facetime"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Facetime</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="panels.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-gamecenter"></i></div>
                        <div class="item-inner">
                          <div class="item-title">GameCenter</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="list-view.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-ibooks"></i></div>
                        <div class="item-inner">
                          <div class="item-title">iBooks</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="media-lists.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-itunes"></i></div>
                        <div class="item-inner">
                          <div class="item-title">iTunes</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="mailf7.php" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-mail"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Mail - NEW</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="swipe-delete.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-maps"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Maps</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="messagesf7.php" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-messages"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Messages - NEW</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="musicf7.php" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-music"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Music - NEW</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="pull-to-refresh.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-passbook"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Passbook</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="phonef7.php" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-phone"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Phone - No Current URIS</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="messages.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-reminders"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Reminders</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="grid.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-remote"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Remote</div>
							<span class="list-val button ">Theme</span>
                          <!--<div class="item-after"><span class="badge bg-green">NEW</span></div>-->
                        </div>
                      </div></a></li>
                  <li><a href="preloader.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-safari"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Safari</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="navbars-toolbars.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-videos"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Videos</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="chromef7.php" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-3-chrome"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Chrome - NEW</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="slider.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-3-facebook"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Facebook</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="photo-browser.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-3-twitter"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Twitter</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="infinite-scroll.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-3-flipboard"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Flipboard</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="youtubef7.php" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-youtube"></i></div>
                        <div class="item-inner">
                          <div class="item-title">YouTube - NEW</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="instagramf7.php<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-3-instagram"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Instagram - WORKING</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="skypef7.php" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-skype"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Skype - NEW</div>
							<span class="list-val button ">Theme</span>
                          <!--<div class="item-after"><span class="badge bg-green">NEW</span></div>-->
                        </div>
                      </div></a></li>
                  <li><a href="photosf7.php" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-photos"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Photos - NEW</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="googlef7.php" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-google"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Google - NEW</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="gplusf7.php" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-gplus"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Google+ - NEW</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="custom/custom.php" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-custom"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Custom - NOT WORKING</div>
							<span class="list-val button ">Make</span>
                        </div>
                      </div></a></li>
                </ul>
                </ul>
                <!-- width="502px" height="252px"
                <iframe src="http://tylerlh.github.com/github-latest-commits-widget/?username=rosco1502&repo=iChanger-2&limit=2"  allowtransparency="true" frameborder="0" scrolling="no" ></iframe>
                -->
              <div class="content-block">
                *App Icons when Installed May Vary
                <p>**Copyright Info Read 'About' In Menu</p>
                <p><a href="#" id="simClickElement" class="beta-warning">Reopen Beta Warning</a></p>
                <!--<p><a href="http://ichanger.tk/hayday.html" class="external">HeyDau</a></p>-->
                <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"></script><a href="http://www.dmca.com/Protection/Status.aspx?ID=d950375c-fe04-4559-882a-af4f73f90e5a" title="DMCA.com Protection Program" class="dmca-badge external"> <img src ="//images.dmca.com/Badges/dmca_protected_sml_120l.png?ID=d950375c-fe04-4559-882a-af4f73f90e5a"  alt="DMCA.com Protection Status" /></a>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End LOL -->
      <div id="view-4" class="view tab">
        <div class="pages navbar-fixed">
          <div data-page="index-4" class="page">
			  <!--




                  iPeeps




                -->
            <div class="navbar">
              <div class="navbar-inner">
                <div class="center">iChanger - iPeeps</div>
            <div class="right"><a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a></div>
              </div>
            </div>
            <div class="page-content">
              <div class="list-block">
                <ul>
                  <li>
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-form-name"></i></div>
                      <div class="item-inner">
                        <div class="item-title label">Name</div>
                        <div class="item-input">
                          <input type="text" placeholder="Your name">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-form-email"></i></div>
                      <div class="item-inner">
                        <div class="item-title label">E-mail</div>
                        <div class="item-input">
                          <input type="email" placeholder="E-mail">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-form-url"></i></div>
                      <div class="item-inner">
                        <div class="item-title label">URL</div>
                        <div class="item-input">
                          <input type="url" placeholder="URL">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-form-password"></i></div>
                      <div class="item-inner">
                        <div class="item-title label">Password</div>
                        <div class="item-input">
                          <input type="password" placeholder="Password">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-form-tel"></i></div>
                      <div class="item-inner">
                        <div class="item-title label">Phone</div>
                        <div class="item-input">
                          <input type="tel" placeholder="Phone">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-form-gender"></i></div>
                      <div class="item-inner">
                        <div class="item-title label">Gender</div>
                        <div class="item-input">
                          <select>
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-form-calendar"></i></div>
                      <div class="item-inner">
                        <div class="item-title label">Birth date</div>
                        <div class="item-input">
                          <input type="date" placeholder="Birth day" value="2014-04-30">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-form-toggle"></i></div>
                      <div class="item-inner">
                        <div class="item-title label">Switch</div>
                        <div class="item-input">
                          <label class="label-switch">
                            <input type="checkbox">
                            <div class="checkbox"></div>
                          </label>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-form-settings"></i></div>
                      <div class="item-inner">
                        <div class="item-title label">Slider</div>
                        <div class="item-input">
                          <div class="range-slider">
                            <input type="range" min="0" max="100" value="50" step="0.1">
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="content-block">
                <p>Mauris commodo lacus at nisl lacinia, nec facilisis erat rhoncus. Sed eget pharetra nunc. Aenean vitae vehicula massa, sed sagittis ante. Quisque luctus nec velit dictum convallis. Nulla facilisi. Ut sed erat nisi. Donec non dolor massa. Mauris malesuada dolor velit, in suscipit leo consectetur vitae. Duis tempus ligula non eros pretium condimentum. Cras sed dolor odio.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Bottom Tabbar-->
      <div class="toolbar tabbar tabbar-labels">
        <div class="toolbar-inner">
			<a href="#view-3" class="tab-link active">
			<i class="icon tabbar-apps-icon"></i>
			<span class="tabbar-label">Apps</span></a>
			<a id="simClickElement2" href="#view-2" class="tab-link">
			<i class="icon tabbar-howto-icon"></i>
			<span class="tabbar-label">How To</span></a>
			<a href="#view-1" class="tab-link">
			<i class="icon tabbar-home-icon">
			<span class="badge badge-red">4</span></i>
			<span class="tabbar-label">Home</span></a>
			<a href="#view-4" class="tab-link">
			<i class="icon tabbar-ipeeps-icon"></i>
			<span class="tabbar-label">iPeeps</span></a>
		  </div>
      </div>
    </div>
	<!-- Popups -->
	  <!-- Privacy Policy Popup -->
  <div class="popup popup-privacy">
<div class="view navbar-fixed">
<div class="pages">
<div class="page">
<div class="navbar">
<div class="navbar-inner">
<div class="center">Privacy</div>
<div class="right"><a href="#" class="link close-popup">Done</a></div>
</div>
</div>
<div class="page-content">
<div class="content-block">
iChanger/TheLocken is committed to user privacy and our policy below describes our principles in maintaining user trust and confidence and protecting your personal information.

iChanger/TheLocken only collects the domain name of visitors to our Web page, the e-mail addresses of those who communicate with us via e-mail, and information volunteered by the consumer, such as site registrations. The information we collect is not shared with other organizations for any purpose.

iChanger/TheLocken may also, from time-to-time, collect non-personally identifying information available from your browser when you request a page from our website. This information includes your IP address, your browser type, the URL requested by your browser and the date and time of your query. We use this information to monitor the usage of our website and to improve the quality of our service.

On occasion and in the future, non-personally-identifiable information we collect may be shared with third-parties to provide more relevant services and advertisements to our visitors. For instance, we may share the number of users that have searched for a specific file or clicked on a specific advertisement featured on our site.

Upon request we provide site visitors with access to unique identifier information that we maintain about them, transaction information (e.g., subscription dates or payments) that we maintain about them. Consumers can access this information by e-mailing us.

We may disclose personally identifiable information under special circumstances, such as to comply with subpoenas or when your actions violate the Terms of Service.

We adhere to valid legal processes and may provide information as required by law to protect and defend the rights of our company, and in certain instances, to protect the personal safety of users and the public.

iChanger/TheLocken uses third party vendors and hosting partners such as but not limited to DreamHost and Google to provide the necessary hardware, software, networking, storage, and related technology required to run iChanger/TheLocken. Although Codeanywhere.com owns the code, databases, and all rights to the web application, you retain all rights to your data.

If you feel that this site is not following its stated information policy, you may contact us. Codeanywhere.com reserves the right to modify all or some of this Privacy Policy at any time without notice.</div>
</div>
</div>
</div>
</div>
</div>
  <!-- Terms of Service Popup -->
  <div class="popup popup-terms">
<div class="view navbar-fixed">
<div class="pages">
<div class="page">
<div class="navbar">
<div class="navbar-inner">
<div class="center">Terms of Service</div>
<div class="right"><a href="#" class="link close-popup">Done</a></div>
</div>
</div>
<div class="page-content">
<div class="content-block">
<p>Here comes popup. You can put here anything, even independent view with its own navigation. Also not, that by default popup looks a bit different on iPhone/iPod and iPad, on iPhone it is fullscreen.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus mauris leo, eu bibendum neque congue non. Ut leo mauris, eleifend eu commodo a, egestas ac urna. Maecenas in lacus faucibus, viverra ipsum pulvinar, molestie arcu. Etiam lacinia venenatis dignissim. Suspendisse non nisl semper tellus malesuada suscipit eu et eros. Nulla eu enim quis quam elementum vulputate. Mauris ornare consequat nunc viverra pellentesque. Aenean semper eu massa sit amet aliquam. Integer et neque sed libero mollis elementum at vitae ligula. Vestibulum pharetra sed libero sed porttitor. Suspendisse a faucibus lectus.</p>
<p>Duis ut mauris sollicitudin, venenatis nisi sed, luctus ligula. Phasellus blandit nisl ut lorem semper pharetra. Nullam tortor nibh, suscipit in consequat vel, feugiat sed quam. Nam risus libero, auctor vel tristique ac, malesuada ut ante. Sed molestie, est in eleifend sagittis, leo tortor ullamcorper erat, at vulputate eros sapien nec libero. Mauris dapibus laoreet nibh quis bibendum. Fusce dolor sem, suscipit in iaculis id, pharetra at urna. Pellentesque tempor congue massa quis faucibus. Vestibulum nunc eros, convallis blandit dui sit amet, gravida adipiscing libero.</p>
<p>Morbi posuere ipsum nisl, accumsan tincidunt nibh lobortis sit amet. Proin felis lorem, dictum vel nulla quis, lobortis dignissim nunc. Pellentesque dapibus urna ut imperdiet mattis. Proin purus diam, accumsan ut mollis ac, vulputate nec metus. Etiam at risus neque. Fusce tincidunt, risus in faucibus lobortis, diam mi blandit nunc, quis molestie dolor tellus ac enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum turpis a velit vestibulum pharetra. Vivamus blandit dapibus cursus. Aenean lorem augue, vehicula in eleifend ut, imperdiet quis felis.</p>
<p>Duis non erat vel lacus consectetur ultricies. Sed non velit dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel varius mi, a tristique ante. Vivamus eget nibh ac elit tempor bibendum sit amet vitae velit. Proin sit amet dapibus nunc, non porta tellus. Fusce interdum vulputate imperdiet. Sed faucibus metus at pharetra fringilla. Fusce mattis orci et massa congue, eget dapibus ante rhoncus. Morbi semper sed tellus vel dignissim. Cras vestibulum, sapien in suscipit tincidunt, lectus mi sodales purus, at egestas ligula dui vel erat. Etiam cursus neque eu lectus eleifend accumsan vitae non leo. Aliquam scelerisque nisl sed lacus suscipit, ac consectetur sapien volutpat. Etiam nulla diam, accumsan ut enim vel, hendrerit venenatis sem. Vestibulum convallis justo vitae pharetra consequat. Mauris sollicitudin ac quam non congue.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- About Popup -->
<div class="popup popup-about">
<div class="view navbar-fixed">
<div class="pages">
<div class="page">
<div class="navbar">
<div class="navbar-inner">
<div class="center">About</div>
<div class="right"><a href="#" class="link close-popup">Done</a></div>
</div>
</div>
<div class="page-content">
<div class="content-block">
<p>iChanger is an iOS app that allows you to theme icons the way you want.</p>
<p>iChanger is developed and maintained by a 3 Developer Group named TheLocken, Bradley (Rosco1502), Loren (Theredspy), and Jase (Aries).</p>
<p><ul><li>Bradley is the lead developer and also started TheLocken, LLC and iChanger</li><li>Loren is the main Android and Java coder of iChanger.</li><li>Jase is the main Icon-Gatherer, he sends icons he finds on various sources to our team to implement into iChanger.</li></ul></p>
<p>We get icons form various sources, including (but not limited to) <a href="http://deviantart.com/" class="external close-popup">DiviantArt.com</a>, <a href="http://uiconstock.com/" class="external close-popup">UIconStock</a>, etc.</p>
<p>Extra thanks to <a href="http://ffra.deviantart.com/" class="external close-popup">FFra</a> for supplying amazing icons packs such as Novus, Flatest, Maximal and to <a href="http://dtafalonso.deviantart.com/" class="external close-popup">Dtafalonso</a> for creating awesome packs such as iOS 7 Alternative, iOS 7 Icons (#1-7)</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Credits Popup -->
<div class="popup popup-credits">
<div class="view navbar-fixed">
<div class="pages">
<div class="page">
<div class="navbar">
<div class="navbar-inner">
<div class="center">Popup Title</div>
<div class="right"><a href="#" class="link close-popup">Done</a></div>
</div>
</div>
<div class="page-content">
<div class="content-block">
<p>Here comes popup. You can put here anything, even independent view with its own navigation. Also not, that by default popup looks a bit different on iPhone/iPod and iPad, on iPhone it is fullscreen.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus mauris leo, eu bibendum neque congue non. Ut leo mauris, eleifend eu commodo a, egestas ac urna. Maecenas in lacus faucibus, viverra ipsum pulvinar, molestie arcu. Etiam lacinia venenatis dignissim. Suspendisse non nisl semper tellus malesuada suscipit eu et eros. Nulla eu enim quis quam elementum vulputate. Mauris ornare consequat nunc viverra pellentesque. Aenean semper eu massa sit amet aliquam. Integer et neque sed libero mollis elementum at vitae ligula. Vestibulum pharetra sed libero sed porttitor. Suspendisse a faucibus lectus.</p>
<p>Duis ut mauris sollicitudin, venenatis nisi sed, luctus ligula. Phasellus blandit nisl ut lorem semper pharetra. Nullam tortor nibh, suscipit in consequat vel, feugiat sed quam. Nam risus libero, auctor vel tristique ac, malesuada ut ante. Sed molestie, est in eleifend sagittis, leo tortor ullamcorper erat, at vulputate eros sapien nec libero. Mauris dapibus laoreet nibh quis bibendum. Fusce dolor sem, suscipit in iaculis id, pharetra at urna. Pellentesque tempor congue massa quis faucibus. Vestibulum nunc eros, convallis blandit dui sit amet, gravida adipiscing libero.</p>
<p>Morbi posuere ipsum nisl, accumsan tincidunt nibh lobortis sit amet. Proin felis lorem, dictum vel nulla quis, lobortis dignissim nunc. Pellentesque dapibus urna ut imperdiet mattis. Proin purus diam, accumsan ut mollis ac, vulputate nec metus. Etiam at risus neque. Fusce tincidunt, risus in faucibus lobortis, diam mi blandit nunc, quis molestie dolor tellus ac enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum turpis a velit vestibulum pharetra. Vivamus blandit dapibus cursus. Aenean lorem augue, vehicula in eleifend ut, imperdiet quis felis.</p>
<p>Duis non erat vel lacus consectetur ultricies. Sed non velit dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel varius mi, a tristique ante. Vivamus eget nibh ac elit tempor bibendum sit amet vitae velit. Proin sit amet dapibus nunc, non porta tellus. Fusce interdum vulputate imperdiet. Sed faucibus metus at pharetra fringilla. Fusce mattis orci et massa congue, eget dapibus ante rhoncus. Morbi semper sed tellus vel dignissim. Cras vestibulum, sapien in suscipit tincidunt, lectus mi sodales purus, at egestas ligula dui vel erat. Etiam cursus neque eu lectus eleifend accumsan vitae non leo. Aliquam scelerisque nisl sed lacus suscipit, ac consectetur sapien volutpat. Etiam nulla diam, accumsan ut enim vel, hendrerit venenatis sem. Vestibulum convallis justo vitae pharetra consequat. Mauris sollicitudin ac quam non congue.</p>
</div>
</div>
</div>
</div>
</div>
</div>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="js/framework7.min.js"></script>
    <script type="text/javascript" src="js/f7-2.js"></script>
    <script type="text/javascript" src="http://www.ichanger.tk/js/alerts.js?v=2"></script>
  </body>
</html>