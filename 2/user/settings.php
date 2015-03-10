    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <link rel="stylesheet" href="../ui/css/framework7.min.css">
    <link rel="stylesheet" href="../ui/css/framework7.themes.css">
    <link rel="stylesheet" href="../ui/css/minor.css">
    <link rel="stylesheet" href="../ui/css/app.css">
  </head>
  <body>
    <!-- Status bar overlay for full screen mode (PhoneGap) -->
    <div class="statusbar-overlay"></div>
    <!-- Views -->
    <div class="views">
      <!-- Your main view, should have "view-main" class -->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar theme-white">
          <div class="navbar-inner">
			      <div class="left sliding"><a href="http://ichangerapp.com/mainview.php" class="back link"><i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">Settings</div>
            <div class="right"></div>
          </div>
        </div>
        <div class="pages navbar-through toolbar-through">
          <div data-page="index" class="page">
            <div class="page-content">
              <div class="list-block">
                <ul>
                  <li class="item-content">
                    <div class="item-media"><i class="icon icon-f7"></i></div>
                    <div class="item-inner">
                      <div class="item-title">Username</div>
                      <div class="item-after">Label</div>
                    </div>
                  </li>
                  <li class="item-content">
                    <div class="item-media"><i class="icon icon-f7"></i></div>
                    <div class="item-inner">
                      <div class="item-title">User ID</div>
                      <div class="item-after">Label</div>
                    </div>
                  </li>
                </div>
              <div class="content-block">
                <p><?php echo $result; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html> 