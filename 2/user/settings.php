<?php
$UserID = htmlspecialchars($_GET['id']);
$xml = new SimpleXMLElement(file_get_contents("http://ichangerapp.com/user/users/".$UserID.".xml"));
$UserID = $xml->UserID;
$username = $xml->username;
$facebook = $xml->facebook;
?>
        <div class="navbar greennavbar theme-white">
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
                    <div class="item-media"><i class="icon icon-settings-username"></i></div>
                    <div class="item-inner">
                      <div class="item-title">Username</div>
                      <div class="item-after"><?php print $username; ?></div>
                    </div>
                  </li>
                  <li class="item-content">
                    <div class="item-media"><i class="icon icon-settings-userid"></i></div>
                    <div class="item-inner">
                      <div class="item-title">User ID</div>
                      <div class="item-after"><?php print $UserID; ?></div>
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