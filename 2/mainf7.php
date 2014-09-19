<?php
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
// !!!!! DUE TO HOW FRAMEWORK7 LOADS PAGES USING AJAX   !!!!!
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
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>iChanger 2</title>
    <!-- Path to Framework7 Library CSS -->
    <link rel="stylesheet" href="ui/css/framework7.css">
    <link rel="stylesheet" href="ui/css/framework7.min.css">
	<link rel="stylesheet" href="ui/css/framework7.themes.css">
	<!-- Path to TheLocken Core CSS -->
    <link rel="stylesheet" href="ui/css/f7-2.css">
    <link rel="stylesheet" href="ui/css/tabs.css">
	<link rel="stylesheet" href="ui/css/app.css">
	<link rel="stylesheet" href="ui/css/nav.css">
	<link rel="stylesheet" href="ui/css/closex.css">
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
  <body>
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
<li><a href="list-view.html" class="close-panel item-link">
<div class="item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">List View</div>
</div>
</div></a></li>
<li><a href="swipe-delete.html" class="close-panel item-link">
<div class="item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Swipe To Delete</div>
</div>
</div></a></li>
<li><a href="forms.html" class="close-panel item-link">
<div class="item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Forms</div>
</div>
</div></a></li>
<li><a href="messages.html" class="close-panel item-link">
<div class="item-content">
<div class="item-media"><i class="icon icon-menu-submitatheme"></i></div>
<div class="item-inner">
<div class="item-title">Sumbit a Theme</div>
</div>
</div></a></li>
<li><a href="grid.html" class="close-panel item-link">
<div class="item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
<div class="item-inner">
<div class="item-title">Quick Tutorial</div>
</div>
</div></a></li>
<li><a href="preloader.html" class="close-panel item-link">
<div class="item-content">
<div class="item-media"><i class="icon icon-menu-reportaproblem"></i></div>
<div class="item-inner">
<div class="item-title">Send Feedback</div>
</div>
</div></a></li>
<li><a href="navbars-toolbars.html" class="close-panel item-link">
<div class="item-content">
<div class="item-media"><i class="icon icon-f7"></i></div>
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
<a href="#" class="button demo-alert">Alert</a>
<?php
if ( $devmode == "true" ) {
echo "<div class='content-block'>";
echo "<p>";
print $devmodel;
echo "</p><p>";
echo "Username:";
print $user_name;
echo "</p><p>";
echo "Userdisplay:";
print $user_display;
echo "</p></div>";
}
?>
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
            <div class="center sliding">iChanger 2</div>
            <div class="right"><a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a></div>
          </div>
        </div>
        <div class="pages navbar-through">
          <div data-page="index-1" class="page">
            <div class="page-content">
              <div class="content-block">
                <p>This is a second view. Lets, for example, have here some internal pages with navbar navigation<a href="appStoref7.php<?php print $uend; ?>">hi</a></p>
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
      <!-- Second view (for second wrap)-->
      <div id="view-2" class="view tab">
        <!-- We can make with view with navigation, let's add Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
			  <!--


                   How To


              -->
            <div class="center sliding">Second View</div>
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
            <div class="center sliding">Apps</div>
            <div class="right"><a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a></div>
          </div>
        </div>
        <div class="pages navbar-through">
          <div data-page="index-3" class="page">
            <div class="page-content">
              <div class="content-block">
                <p>Apps To Theme!</p>
              </div>
              <div class="list-block">
                <ul>
                  <li><a href="appStoref7.php" target="_blank" onclick="slowLoad()" class="close-panel item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-appstore"></i></div>
                        <div class="item-inner">
                          <div class="item-title">App Store</div>
						<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="popover.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-calendar"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Calendar</div>
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
                  <li><a href="contacts.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-mail"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Mail</div>
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
                  <li><a href="sortable-list.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-messages"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Messages</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="accordion.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-music"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Music</div>
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
                  <li><a href="forms.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-phone"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Phone</div>
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
                  <li><a href="searchbar.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-3-chrome"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Chrome</div>
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
                  <li><a href="notifications.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-youtube"></i></div>
                        <div class="item-inner">
                          <div class="item-title">YouTube</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="instagramf7.php<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-3-instagram"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Instagram</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="custom/custom.php" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Custom</div>
							<span class="list-val button ">Make</span>
                          <!--<div class="item-after"><span class="badge bg-green">NEW</span></div>-->
                        </div>
                      </div></a></li>
                  <li><a href="#" class="item-link ks-generate-page">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Dynamically Generated Content</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                  <li><a href="transitions.html<?php print $uend; ?>" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Transitions And Effects</div>
							<span class="list-val button ">Theme</span>
                        </div>
                      </div></a></li>
                </ul>
                </ul>
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
                <div class="center">Settings</div>
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
			<a href="#view-2" class="tab-link">
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
	<div id="topright">
	<a href="#" class="closexmain close-popup">X</a>
	</div>
    <div id="fontpopup" class="fontpopup content-block">
	  <h3>Privacy Policy</h3>
	  <!--<input id="button" type="button" class="closexmain" value="X">-->
      <p>Lorem ipsum dolor gdfsgdsfgsdfgdsgfdfsg d sg dsg dfsg  gsdfgf djfd j j jjj j jjj kdfgsjgfidjs igu dishgi dfhi gdhfisghudfsg udhfgu dhgu hdfug hsudfg fhshudsfghudfhgsu fhdu sghufshghuh huhhhuhgsufghuu jjijs djigji jjj</p>
	  </div>
	</div>
  <!-- Terms of Service Popup -->
  <div class="popup popup-terms">
    <div class="content-block">
      <p>Services</p>
      <p><a href="#" class="close-popup">Close popup</a></p>
      <p>Lorem ipsum dolor ...</p>
    </div>
  </div>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="js/framework7.min.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="js/f7-2.js"></script>
  </body>
</html>