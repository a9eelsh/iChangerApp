<body>
  ...
  <!-- Views -->
  <div class="views">
    <!-- Your main view -->
    <div class="view view-main">
      <!-- Pages -->
      <div class="pages">
        <div class="page" data-page="home">
          <div class="page-content">
            <?php 
            $v = '' . htmlspecialchars($_GET["v"]) . '';
            print $v;
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Another view -->
    <div class="view another-view">
      <!-- Pages -->
      <div class="pages">
        <div class="page" data-page="home-another">
          <div class="page-content">
            <?php 
            $v = '' . htmlspecialchars($_GET["v"]) . '';
            print $v;
            ?>
          </div>
        </div>
      </div>
    </div>          
  </div>
  ...
</body>