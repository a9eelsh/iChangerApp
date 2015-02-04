<!DOCTYPE html>
<!-- Copyright 2015 TheLocken LLC All Rights Reserved -->
<html>
  <head>
    <meta charset="utf-8">
    <!-- Apple WebApp Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- App Name, Title -->
    <title>iChanger 3b</title>
    <!-- CSS -->
    <link rel="stylesheet" href="ui/css/framework7.css">
    <link rel="stylesheet" href="ui/css/framework7.min.css">
	<link rel="stylesheet" href="ui/css/framework7.themes.css">
	<link rel="stylesheet" href="ui/css/title.css?v=2">
	<style> .statusbar-overlay{background:#87ceeb} </style>
  </head>
  <body>
    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Left panel with reveal effect-->
    <div class="panel panel-left panel-reveal">
      <div class="content-block">
        <p>Left panel content goes here</p>
      </div>
    </div>
    <!-- Right panel with cover effect-->
    <div class="panel panel-right panel-cover">
      <div class="content-block">
        <p>Right panel content goes here</p>
      </div>
    </div>
    <!-- Views-->
    <div class="views">
      <!-- Your main view, should have "view-main" class-->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <div class="center sliding">iChanger</div>
            <div class="right"><a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a></div>
          </div>
        </div>
        <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Index Page-->
          <div data-page="index" class="page">
            <div class="page-content">
              <div class="content-block-title"></div>
              <div class="content-block">
                <div class="content-block-inner">
                  <p>
                      <header class="site__header island">
  <div class="wrap">
   <span id="animationSandbox" style="display: block;"><h1 class="site__title mega">iChanger 3b</h1></span>
  </div>
</header><!-- /.site__header -->
</p>
                </div>
              </div>
              <div class="list-block">
                <ul>
                  <li><a href="#view-2" class="tab-link">
                      <div class="item-inner"> 
                        <div class="item-title">About Me</div>
                      </div></a></li>
                  <li><a href="projects.html" class="item-link item-content">
                      <div class="item-inner"> 
                        <div class="item-title">My Projects</div>
                      </div></a></li>
                  <li><a href="cars.html" data-contextName="cars" class="item-link item-content">
                      <div class="item-inner">
                        <div class="item-title">My Cars</div>
                      </div></a></li>
                  <li><a href="contacts.html" class="item-link item-content">
                      <div class="item-inner">
                        <div class="item-title">Contacts</div>
                      </div></a></li>
                </ul>
              </div>
              <div class="content-block-title">Side panels</div>
              <div class="content-block">
                <div class="row">
                  <div class="col-50"><a href="#" data-panel="left" class="button open-panel">Left Panel</a></div>
                  <div class="col-50"><a href="#" data-panel="right" class="button open-panel">Right Panel</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Bottom Toolbar-->
        <div class="toolbar">
          <div class="toolbar-inner"><a href="#" class="link">Link 1</a><a href="#" class="link">Link 2</a></div>
        </div>
      </div>
      
      <div id="view-2" class="view tab">
      <!-- Navbar-->
        <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Index Page-->
          <div data-page="index" class="page">
            <div class="page-content">
              <div class="content-block-title">Welcome1234567890</div>
              <div class="content-block">
                <div class="content-block-inner">
                  <p>This app 101010101011110101001011000000101010100101001010010101010111100101001010010011001011111010011001010100101r pages with required data.</p>
                </div>
              </div>
              <div class="list-block">
                <ul>
                  <li><a href="#" data-template="about" date-contextName="about" class="item-link item-content">
                      <div class="item-inner"> 
                        <div class="item-title">Test 1</div>
                      </div></a></li>
                </ul>
              </div>
              <div class="content-block-title">Side panels</div>
              <div class="content-block">
                <div class="row">
                  <div class="col-50"><a href="#" data-panel="left" class="button open-panel">Left Panel</a></div>
                  <div class="col-50"><a href="#" data-panel="right" class="button open-panel">Right Panel</a></div>
                </div>
              </div>
            </div>
          </div>
    </div>
      
      
      
    </div>
    <!-- Template7 templates-->
    <script type="text/template7" id="about">
      <div class="navbar">
        <div class="navbar-inner">
          <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
          <div class="center sliding">About Me</div>
          <div class="right"><a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a></div>
        </div>
      </div>
      <div class="pages">
        <div data-page="about" class="page">
          <div class="page-content">
            <div class="content-block">
              <div class="content-block-inner">
                <p>Hello, my name is {{name}}. I am {{age}} years old and i am working as {{position}} at {{company}}.</p>
                <p>I have a lot of interests: {{#if interests}}{{join interests delimeter=", "}}{{/if}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </script>
    <!-- Javascript -->
    <script type="text/javascript" src="js/framework7.min.js"></script>
    <script type="text/javascript" src="js/f7-2.js"></script>
  </body>
</html>