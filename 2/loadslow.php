<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="INVALID NoInstall">
    <link href="pics/noinstall.png" rel="apple-touch-icon-precomposed">
    <title>iChanger 2</title>
    <!-- CSS -->
    <link rel="stylesheet" href="ui/css/framework7.css">
    <link rel="stylesheet" href="ui/css/framework7.min.css">
	<link rel="stylesheet" href="ui/css/framework7.themes.css">
	<link rel="stylesheet" href="ui/css/f7-2.css">
    <link rel="stylesheet" href="ui/css/tabs.css?v=5">
    <link rel="stylesheet" href="ui/css/app.css?v=5">
	<link rel="stylesheet" href="ui/css/nav.css">
	<link rel="stylesheet" href="ui/css/closex.css">
	<link rel="stylesheet" href="ui/css/load.css">
  </head>
  <body>
    <div class="statusbar-overlay"></div>
    <!-- Views -->
    <div class="views">
      <!-- Your main view, should have "view-main" class -->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <!-- We need cool sliding animation on title element, so we have additional "sliding" class -->
            <div class="center sliding">Loading Slow?</div>
          </div>
        </div>
        <!-- Pages container, because we use fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Page, "data-page" contains page name -->
          <div data-page="index" class="page">
            <!-- Scrollable page content -->
            <div class="page-content">
              <p>Page content goes here</p>
              <!-- Link to another page -->
              <a href="about.html">About app</a>
            </div>
          </div>
        </div>
        <!-- Bottom Toolbar-->
        <div class="toolbar">
          <div class="toolbar-inner">
            <!-- Toolbar links -->
            <a href="#" class="link">Link 1</a>
            <a href="#" class="link">Link 2</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="js/framework7.min.js"></script>
    <script type="text/javascript" src="js/f7-2.js"></script>
    <script type="text/javascript" src="http://www.ichanger.tk/js/alerts.js?v=3"></script>
  </body>
</html>