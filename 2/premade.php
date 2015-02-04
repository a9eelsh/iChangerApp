      <div id="view-3" class="view view-main tab active">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="center sliding">Premade Icons 
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
      </div>