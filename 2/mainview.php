
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>iChanger MainView</title>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,400italic,700italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="ui/css/framework7.min.css">
	  <link rel="stylesheet" href="ui/css/framework7.themes.min.css">
	  <link rel="stylesheet" href="ui/css/minor.css">
	  <link rel="stylesheet" href="ui/css/app.css">
	  <link rel="stylesheet" href="ui/css/title.css?v=2">
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
        <div class="navbar theme-white">
          <!-- Navbar inner for Index page-->
          <div data-page="index" class="navbar-inner">
            <!-- We have home navbar without left link-->
            <div class="center sliding"></div>
            <div class="right">
              <!-- Right link contains only icon - additional "icon-only" class--><a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
            </div>
          </div>
          <!-- Navbar inner for About page-->
          <div data-page="about" class="navbar-inner cached">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">About Us</div>
          </div>
          <!-- Navbar inner for Services page-->
          <div data-page="browse" class="navbar-inner cached">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">Browse</div>
          </div>
          <!-- Navbar inner for Form page-->
          <div data-page="form" class="navbar-inner cached">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">Form</div>
          </div>
        </div>
        <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Index Page-->
          <div data-page="index" class="page">
            <!-- Scrollable page content-->
            <div class="page-content">
              <div class="content-block">
                <div class="content-block-inner">
                  <p><center><h1 class="maintitle mega">iChanger</h1></center></p>
                </div>
              </div>
              <div class="content-block">
                  <div class="row">
                  <div class="col-50">
                    <a href="browse.php">
                    <center><span class="icon browse"><img src="pics/browse.png"></span></center>
                    <center><span class="tabbar-label browse">Browse</span></center>
                    </a>
                  </div>
                  <div class="col-50">
                    <a href="custom/custom.php">
                    <center><span class="icon create"><img src="pics/create.png"></span></center>
                    <center><span class="tabbar-label create">Create</span></center>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- About Page-->
          <div data-page="about" class="page cached">
            <div class="page-content">
              <div class="content-block">
                <p>You may go <a href="#" class="back">back</a> or load <a href="#services">Services</a> page.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel commodo massa, eu adipiscing mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus ultricies dictum neque, non varius tortor fermentum at. Curabitur auctor cursus imperdiet. Nam molestie nisi nec est lacinia volutpat in a purus. Maecenas consectetur condimentum viverra. Donec ultricies nec sem vel condimentum. Phasellus eu tincidunt enim, sit amet convallis orci. Vestibulum quis fringilla dolor.    </p>
                <p>Mauris commodo lacus at nisl lacinia, nec facilisis erat rhoncus. Sed eget pharetra nunc. Aenean vitae vehicula massa, sed sagittis ante. Quisque luctus nec velit dictum convallis. Nulla facilisi. Ut sed erat nisi. Donec non dolor massa. Mauris malesuada dolor velit, in suscipit leo consectetur vitae. Duis tempus ligula non eros pretium condimentum. Cras sed dolor odio.</p>
                <p>Suspendisse commodo adipiscing urna, a aliquet sem egestas in. Sed tincidunt dui a magna facilisis bibendum. Nunc euismod consectetur lorem vitae molestie. Proin mattis tellus libero, non hendrerit neque eleifend ac. Pellentesque interdum velit at lacus consectetur scelerisque et id dui. Praesent non fringilla dui, a elementum purus. Proin vitae lacus libero. Nunc eget lectus non mi iaculis interdum vel a velit. Nullam tincidunt purus id lacus ornare, at elementum turpis euismod. Cras mauris enim, congue eu nisl sit amet, pulvinar semper erat. Suspendisse sed mauris diam.</p>
                <p>Nam eu mauris leo. Pellentesque aliquam vehicula est, sed lobortis tellus malesuada facilisis. Fusce at hendrerit ligula. Donec eu nibh convallis, pulvinar enim quis, lacinia diam. Ut semper ac magna nec ornare. Integer placerat justo sed nunc suscipit facilisis. Vestibulum ac tincidunt augue. Duis eu aliquet mauris, vel luctus mauris. Nulla non augue nec diam pharetra posuere at in mauris.</p>
              </div>
            </div>
          </div>
          <!-- Services Page-->
          <div data-page="browse" class="page cached">
            <div class="page-content">
              <div class="content-block">
                <p>You may go <a href="#" class="back">back</a> or load <a href="#about">About</a> page.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel commodo massa, eu adipiscing mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus ultricies dictum neque, non varius tortor fermentum at. Curabitur auctor cursus imperdiet. Nam molestie nisi nec est lacinia volutpat in a purus. Maecenas consectetur condimentum viverra. Donec ultricies nec sem vel condimentum. Phasellus eu tincidunt enim, sit amet convallis orci. Vestibulum quis fringilla dolor.    </p>
                <p>Mauris commodo lacus at nisl lacinia, nec facilisis erat rhoncus. Sed eget pharetra nunc. Aenean vitae vehicula massa, sed sagittis ante. Quisque luctus nec velit dictum convallis. Nulla facilisi. Ut sed erat nisi. Donec non dolor massa. Mauris malesuada dolor velit, in suscipit leo consectetur vitae. Duis tempus ligula non eros pretium condimentum. Cras sed dolor odio.</p>
                <p>Suspendisse commodo adipiscing urna, a aliquet sem egestas in. Sed tincidunt dui a magna facilisis bibendum. Nunc euismod consectetur lorem vitae molestie. Proin mattis tellus libero, non hendrerit neque eleifend ac. Pellentesque interdum velit at lacus consectetur scelerisque et id dui. Praesent non fringilla dui, a elementum purus. Proin vitae lacus libero. Nunc eget lectus non mi iaculis interdum vel a velit. Nullam tincidunt purus id lacus ornare, at elementum turpis euismod. Cras mauris enim, congue eu nisl sit amet, pulvinar semper erat. Suspendisse sed mauris diam.</p>
                <p>Nam eu mauris leo. Pellentesque aliquam vehicula est, sed lobortis tellus malesuada facilisis. Fusce at hendrerit ligula. Donec eu nibh convallis, pulvinar enim quis, lacinia diam. Ut semper ac magna nec ornare. Integer placerat justo sed nunc suscipit facilisis. Vestibulum ac tincidunt augue. Duis eu aliquet mauris, vel luctus mauris. Nulla non augue nec diam pharetra posuere at in mauris.     </p>
              </div>
            </div>
          </div>
          <!-- Form Page-->
          <div data-page="form" class="page cached">
            <div class="page-content">
              <div class="content-block-title">Form Example</div>
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
                  <li class="align-top">
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-form-comment"></i></div>
                      <div class="item-inner"> 
                        <div class="item-title label">Textarea</div>
                        <div class="item-input">
                          <textarea></textarea>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="content-block">
                <div class="row">
                  <div class="col-50"><a href="#" class="button button-big button-fill color-red">Cancel</a></div>
                  <div class="col-50">
                    <input type="submit" value="Submit" class="button button-big button-fill color-green">
                  </div>
                </div>
              </div>
              <div class="content-block-title">Checkbox group</div>
              <div class="list-block">
                <ul>
                  <li>
                    <label class="label-checkbox item-content">
                      <input type="checkbox" name="ks-checkbox" value="Books" checked>
                      <div class="item-media"><i class="icon icon-form-checkbox"></i></div>
                      <div class="item-inner">
                        <div class="item-title">Books</div>
                      </div>
                    </label>
                  </li>
                  <li>
                    <label class="label-checkbox item-content">
                      <input type="checkbox" name="ks-checkbox" value="Movies">
                      <div class="item-media"><i class="icon icon-form-checkbox"></i></div>
                      <div class="item-inner">
                        <div class="item-title">Movies</div>
                      </div>
                    </label>
                  </li>
                  <li>
                    <label class="label-checkbox item-content">
                      <input type="checkbox" name="ks-checkbox" value="Food">
                      <div class="item-media"><i class="icon icon-form-checkbox"></i></div>
                      <div class="item-inner">
                        <div class="item-title">Food</div>
                      </div>
                    </label>
                  </li>
                  <li>
                    <label class="label-checkbox item-content">
                      <input type="checkbox" name="ks-checkbox" value="Drinks">
                      <div class="item-media"><i class="icon icon-form-checkbox"></i></div>
                      <div class="item-inner">
                        <div class="item-title">Drinks</div>
                      </div>
                    </label>
                  </li>
                </ul>
              </div>
              <div class="content-block-title">Radio buttons group</div>
              <div class="list-block">
                <ul>
                  <li>
                    <label class="label-radio item-content">
                      <input type="radio" name="ks-radio" value="Books" checked>
                      <div class="item-inner">
                        <div class="item-title">Books</div>
                      </div>
                    </label>
                  </li>
                  <li>
                    <label class="label-radio item-content">
                      <input type="radio" name="ks-radio" value="Movies">
                      <div class="item-inner">
                        <div class="item-title">Movies</div>
                      </div>
                    </label>
                  </li>
                  <li>
                    <label class="label-radio item-content">
                      <input type="radio" name="ks-radio" value="Food">
                      <div class="item-inner">
                        <div class="item-title">Food</div>
                      </div>
                    </label>
                  </li>
                  <li>
                    <label class="label-radio item-content">
                      <input type="radio" name="ks-radio" value="Drinks">
                      <div class="item-inner">
                        <div class="item-title">Drinks</div>
                      </div>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Popups --
<div class="popup popup-privacy">
<div class="view navbar-fixed">
<div class="pages">
<div class="page">
<div class="navbar">
<div class="navbar-inner">
<div class="center">Privacy Policy</div>
<div class="right"><a href="#" class="link close-popup">Done</a></div>
</div>
</div>
<div class="page-content">
<div class="content-block">
<p>TheLocken LLC is committed to user privacy and our policy below describes our principles in maintaining user trust and confidence and protecting your personal information.</p>
<p>TheLocken LLC only collects the domain name of visitors to our Web page, the e-mail addresses of those who communicate with us via e-mail, and information volunteered by the consumer, such as site registrations. The information we collect is not shared with other organizations for any purpose.</p>
<p>TheLocken LLC may also, from time-to-time, collect non-personally identifying information available from your browser when you request a page from our website. This information includes your IP address, your browser type, the URL requested by your browser and the date and time of your query. We use this information to monitor the usage of our website and to improve the quality of our service.</p>
<p>On occasion and in the future, non-personally-identifiable information we collect may be shared with third-parties to provide more relevant services and advertisements to our visitors. For instance, we may share the number of users that have searched for a specific file or clicked on a specific advertisement featured on our site.</p>
<p>Upon request we provide site visitors with access to unique identifier information that we maintain about them, transaction information (e.g., subscription dates or payments) that we maintain about them. Consumers can access this information by e-mailing us.</p>
<p>We may disclose personally identifiable information under special circumstances, such as to comply with subpoenas or when your actions violate the Terms of Service.</p>
<p>We adhere to valid legal processes and may provide information as required by law to protect and defend the rights of our company, and in certain instances, to protect the personal safety of users and the public.</p>
<p>TheLocken LLC uses third party vendors and hosting partners such as but not limited to DreamHost, Google, CloudFlare, and GitHub to provide the necessary hardware, software, networking, storage, and related technology required to run TheLocken LLC.</p>
<p>If you feel that this iOS app is not following its stated information policy, please contact us. TheLocken LLC reserves the right to modify all or some of this Privacy Policy at any time without notice.</p>
<p>TheLocken LLC respects your privacy and does not distribute, make available, or claim any ownership or copyright to the images that you upload to the service.</p>
<p>The images that are uploaded are stored on our server for a short period of time. They are not displayed to anyone unless you share the URL of the result page. Images may be deleted from our servers at any time without notice.</p>
<p>In no event and under no legal theory, whether in tort (including negligence), contract, or otherwise, unless required by applicable law (such as deliberate and grossly negligent acts) or agreed to in writing, shall TheLocken LLC be liable to users of this service for damages, including any direct, indirect, special, incidental, or consequential damages of any character arising as a result of the use or inability to use the service (including but not limited to damages for loss of goodwill, work stoppage, computer failure or malfunction, or any and all other commercial damages or losses).</p>
<p>TheLocken LLC in no way is responsibe for damaged, broken, or dysfunctional devices, iChanger will not cause your device to be damaged as its using Apple's Addtohomescreen Bookmark function, if you think iChanger in any way damaged your device please contact us imidetly.</p>
</div>
</div>
</div>
</div>
</div>
</div>
        -->
      </div>
    </div>
    <script type="text/javascript" src="js/framework7.min.js"></script>
    <script type="text/javascript" src="js/mainview.js"></script>
  </body>
</html>