<!DOCTYPE html>
<!-- COPYRIGHT 2015 TheLocken LLC All Rights Reserved + DMCA Rights -->
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="DONT INSTALL HERE">
    <link href="pics/noinstall.png" rel="apple-touch-icon-precomposed">
    <title>iChanger 2</title>
    <!-- CSS -->
    <link rel="stylesheet" href="ui/css/framework7.css">
    <link rel="stylesheet" href="ui/css/framework7.min.css">
	  <link rel="stylesheet" href="ui/css/framework7.themes.css">
	  <link rel="stylesheet" href="ui/css/f7-2.css">
    <link rel="stylesheet" href="ui/css/tabs.css?v=5">
    <link rel="stylesheet" href="ui/css/app.css?v=8">
	  <link rel="stylesheet" href="ui/css/nav.css">
	  <link rel="stylesheet" href="ui/css/closex.css">
	  <link rel="stylesheet" href="ui/css/load.css">
	  <!-- JS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script src="http://www.lockenfiles.tk/cdn/jquery-1.11.1.min.js"></script>
    <style>
      .statusbar-overlay {
        background: SkyBlue;
      }
    </style>
</head>
<body>
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
                <center><iframe src="http://nlalonde.github.com/commits-widget/index.html?owner=rosco1502&repo=iChanger-2&limit=6&width=200&height=200" width="502px" height="202px"></iframe></center>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- 

                                                                          CUSTOM

-->
      <div id="view-2" class="view tab">
        <!-- We can make with view with navigation, let's add Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <div class="center sliding">iChanger - Custom</div>
            <div class="right"><a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a></div>
          </div>
        </div>
        <div class="pages navbar-through">
          <div data-page="index-1" class="page">
            <div class="page-content">
<div class="content-block-title">Customize!</div>

	<div class="content-block-title">Notice</div>
    <div class="content-block">
        <div id="NWarning" style="display:none;"><p style="color:red"><img src="thumbs/error-50.png" alt="Warning" height="20" width="20">Warning Facebook Notification List is bugged an may not work properly.</p></div>
        <p>Icons are deleted off our server after 10 hours of being uploaded to keep our servers happy.</p>
        <p><a href="#" data-popup=".popup-privacy" value="Create!" class="open-popup close-panel item-link">When you use iChanger you agree to the Privacy Policy</a></p>
    </div>
      </div>
      </div>
      </div>
      </div>

      <div id="view-3" class="view view-main tab active">
        <!-- We can make with view with navigation, let's add Top Navbar-->
        
        <!-- PREMADE -->
        
        
        <div class="navbar">
          <div class="navbar-inner">
            <div class="center sliding">iChanger - Premade Icons 
            <?php 
            $dev = '' . htmlspecialchars($_GET["dev"]) . ''; 
            if ( $dev == "y" ) {
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
                <a href="#view-2">View-2</a>
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
                  <li><a href="facebookindex.php" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-app-3-facebook"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Facebook - BETA</div>
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
                </ul>
                </ul>
                <!-- width="502px" height="252px"
                <iframe src="http://tylerlh.github.com/github-latest-commits-widget/?username=rosco1502&repo=iChanger-2&limit=2"  allowtransparency="true" frameborder="0" scrolling="no" ></iframe>
                -->
              <div class="content-block">
                <p><a href="#" id="simClickElement" class="beta-warning">Reopen Beta Warning</a></p>
                <!--<p><a href="http://ichangerapp.com/hayday.html" class="external">HeyDau</a></p>-->
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
<!-- iPeeps HERE -->
            </div>
          </div>
        </div>
      </div>
      <!--

                                                                        Bottom Tabbar

      -->
<!--<div class="toolbar tabbar tabbar-labels">
    <div class="toolbar-inner">
        <a href="#view-3" class="tab-link active">
            <i class="icon tabbar-apps-icon"></i>
            <span class="tabbar-label">Premade</span>
        </a>
        <a href="#view-2" class="tab-link">
            <i class="icon tabbar-custom-icon">
                <span class="badge bg-red">NEW</span>
            </i>
            <span class="tabbar-label">Custom</span>
        </a>
        <a href="#view-1" class="tab-link">
            <i class="icon tabbar-ipeeps-icon"></i>
            <span class="tabbar-label">iPeeps</span>
        </a>
    </div>
</div>-->