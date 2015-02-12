
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>iChanger MainView</title>
    <link rel="stylesheet" href="ui/css/framework7.min.css">
	<link rel="stylesheet" href="ui/css/framework7.themes.min.css">
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
          <!-- Navbar inner for Index page-->
          <div data-page="index" class="navbar-inner">
            <!-- We have home navbar without left link-->
            <div class="center sliding">Awesome App</div>
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
          <div data-page="services" class="navbar-inner cached">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">Services</div>
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
              <div class="content-block-title">Welcome To My Awesome App</div>
              <div class="content-block">
                <div class="content-block-inner">
                  <p>Couple of worlds here because my app is so awesome!</p>
                  <p>Duis sed erat ac eros ultrices pharetra id ut tellus. Praesent rhoncus enim ornare ipsum aliquet ultricies. Pellentesque sodales erat quis elementum sagittis.</p>
                </div>
              </div>
              <div class="content-block-title">What about simple navigation?</div>
              <div class="list-block">
                <ul>
                  <li><a href="#about" class="item-link">
                      <div class="item-content">
                        <div class="item-inner"> 
                          <div class="item-title">About</div>
                        </div>
                      </div></a></li>
                  <li><a href="#services" class="item-link">
                      <div class="item-content"> 
                        <div class="item-inner">
                          <div class="item-title">Services</div>
                        </div>
                      </div></a></li>
                  <li><a href="#form" class="item-link">
                      <div class="item-content"> 
                        <div class="item-inner">
                          <div class="item-title">Form</div>
                        </div>
                      </div></a></li>
                </ul>
              </div>
              <!-- Start Major Buttons (Browse + Create) -->
              <div class="row">
                  <div class="col-50">
                    <a href="#view-3" class="tab-link">
                    <center><span class="icon browse"><img src="pics/browse.png"></span></center>
                    <center><span class="tabbar-label browse">Browse</span></center>
                    </a>
                  </div>
                  <div class="col-50">
                    <center><a href="#view-3" class="tab-link">
                    <i class="icon tabbar-apps-icon"></i>
                    <span class="tabbar-label">Create</span>
                    </a></center>
                  </div>
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
          <div data-page="services" class="page cached">
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
        <!-- Bottom Toolbar-->
        <div class="toolbar">
          <div class="toolbar-inner"><a href="#" class="link">Link 1</a><a href="#" class="link">Link 2</a></div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/framework7.min.js"></script>
    <script type="text/javascript" src="js/mainview.js"></script>
  </body>
</html>