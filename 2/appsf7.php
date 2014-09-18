<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Framework7</title>
    <link rel="stylesheet" href="ui/css/framework7.css">
    <link rel="stylesheet" href="ui/css/framework7.themes.css">
    <link rel="stylesheet" href="ui/css/f7-2.css">
  </head>
  <body>
    <div class="statusbar-overlay"></div>
    <div class="panel-overlay"></div>
    <div class="panel panel-left panel-cover layout-dark">
      <div class="content-block-title">Left Panel</div>
      <div class="content-block">
        <p>This is a side panel. You can close it by clicking outsite or on this link: <a href="#" class="close-panel">close me</a>. You can put here anything, even another isolated view like in <a href="#" data-panel="right" class="open-panel">Right Panel</a></p>
      </div>
      <div class="content-block-title">Framework7 Kitchen Sink</div>
      <div class="list-block">
        <ul>
          <li><a href="modals.html" class="close-panel item-link">
              <div class="item-content">
                <div class="item-media"><i class="icon icon-f7"></i></div>
                <div class="item-inner">
                  <div class="item-title">Modals</div>
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
                <div class="item-media"><i class="icon icon-f7"></i></div>
                <div class="item-inner">
                  <div class="item-title">Messages</div>
                </div>
              </div></a></li>
          <li><a href="grid.html" class="close-panel item-link">
              <div class="item-content">
                <div class="item-media"><i class="icon icon-f7"></i></div>
                <div class="item-inner">
                  <div class="item-title">Grid</div>
                </div>
              </div></a></li>
          <li><a href="preloader.html" class="close-panel item-link">
              <div class="item-content">
                <div class="item-media"><i class="icon icon-f7"></i></div>
                <div class="item-inner">
                  <div class="item-title">Preloader</div>
                </div>
              </div></a></li>
          <li><a href="navbars-toolbars.html" class="close-panel item-link">
              <div class="item-content">
                <div class="item-media"><i class="icon icon-f7"></i></div>
                <div class="item-inner">
                  <div class="item-title">Navbars And Toolbars</div>
                </div>
              </div></a></li>
          <li><a href="transitions.html" class="close-panel item-link">
              <div class="item-content">
                <div class="item-media"><i class="icon icon-f7"></i></div>
                <div class="item-inner">
                  <div class="item-title">Transitions And Effects</div>
                </div>
              </div></a></li>
        </ul>
      </div>
      <div class="content-block">
        <p>Long text block goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sem urna, gravida non scelerisque id, fringilla ac velit. Phasellus elementum a ipsum at ornare. Mauris sagittis rhoncus euismod. Integer convallis augue eu lacus ultrices, in dictum elit consequat. Nulla faucibus massa id felis egestas eleifend. Proin consequat dignissim magna ut scelerisque. Vestibulum ac lorem semper, posuere sapien nec, pharetra massa. Nulla a tellus facilisis, sollicitudin quam porta, aliquam lorem. Fusce dignissim eros ac diam molestie, ut ultrices lorem tristique. Ut facilisis augue ac nisi egestas malesuada. Nunc posuere tortor quis eleifend mollis. Aliquam erat volutpat. Donec feugiat elit tellus, nec convallis orci elementum in. Sed urna mi, vestibulum id tempus id, pretium et ante. Pellentesque eget sollicitudin ligula. Phasellus pellentesque velit eu porta suscipit.</p>
      </div>
    </div>
    <div class="panel panel-right panel-reveal layout-dark">
      <div class="view view-right">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="center sliding">Right Panel</div>
          </div>
        </div>
        <div class="pages navbar-through">
          <div data-page="panel-right1" class="page">
            <div class="page-content">
              <div class="content-block">
                <p>This is a right side panel. You can close it by clicking outsite or on this link: <a href="#" class="close-panel">close me</a>. You can put here anything, even another isolated view, try it:</p>
              </div>
              <div class="list-block">
                <ul>
                  <li><a href="panel-right2.html" class="item-link">
                      <div class="item-content">
                        <div class="item-inner">
                          <div class="item-title">Right panel page 2</div>
                        </div>
                      </div></a></li>
                  <li><a href="panel-right3.html" class="item-link">
                      <div class="item-content">
                        <div class="item-inner">
                          <div class="item-title">Right panel page 3</div>
                        </div>
                      </div></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="views">
      <div class="view view-main">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="center sliding">Framework7</div>
            <div class="right"><a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a></div>
          </div>
        </div>
        <div class="toolbar">
          <div class="toolbar-inner"><a href="#" class="link">Dummy Link</a><a href="#" data-popover=".popover-menu" class="open-popover link">Menu</a></div>
        </div>
        <div class="pages navbar-through toolbar-through">
          <div data-page="index" class="page">
            <div class="page-content">
              <div class="content-block-title">Welcome To Framework7</div>
              <div class="content-block"><a href="about.html" class="button">Read About Framework7</a></div>
              <div class="content-block-title">Framework7 Kitchen Sink</div>
              <div class="list-block">
                <ul>
                  <li><a href="modals.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Modals</div>
                        </div>
                      </div></a></li>
                  <li><a href="popover.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Popover</div>
                        </div>
                      </div></a></li>
                  <li><a href="tabs.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Tabs</div>
                        </div>
                      </div></a></li>
                  <li><a href="panels.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Side Panels</div>
                        </div>
                      </div></a></li>
                  <li><a href="list-view.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">List View</div>
                        </div>
                      </div></a></li>
                  <li><a href="media-lists.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Media Lists</div>
                        </div>
                      </div></a></li>
                  <li><a href="contacts.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Contacts List</div>
                        </div>
                      </div></a></li>
                  <li><a href="swipe-delete.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Swipe To Delete</div>
                        </div>
                      </div></a></li>
                  <li><a href="sortable-list.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Sortable List</div>
                        </div>
                      </div></a></li>
                  <li><a href="accordion.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Accordion</div>
                        </div>
                      </div></a></li>
                  <li><a href="pull-to-refresh.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Pull To Refresh</div>
                        </div>
                      </div></a></li>
                  <li><a href="forms.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Forms</div>
                        </div>
                      </div></a></li>
                  <li><a href="messages.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Messages</div>
                        </div>
                      </div></a></li>
                  <li><a href="grid.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Grid</div>
                          <div class="item-after"><span class="badge bg-green">NEW</span></div>
                        </div>
                      </div></a></li>
                  <li><a href="preloader.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Preloader</div>
                        </div>
                      </div></a></li>
                  <li><a href="navbars-toolbars.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Navbars And Toolbars</div>
                        </div>
                      </div></a></li>
                  <li><a href="searchbar.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Search Bar</div>
                        </div>
                      </div></a></li>
                  <li><a href="slider.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Slider</div>
                        </div>
                      </div></a></li>
                  <li><a href="photo-browser.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Photo Browser</div>
                        </div>
                      </div></a></li>
                  <li><a href="infinite-scroll.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Infinite Scroll</div>
                        </div>
                      </div></a></li>
                  <li><a href="notifications.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Notifications</div>
                        </div>
                      </div></a></li>
                  <li><a href="login-screen.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Login Screen</div>
                        </div>
                      </div></a></li>
                  <li><a href="color-themes.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Color Themes</div>
                          <div class="item-after"><span class="badge bg-green">NEW</span></div>
                        </div>
                      </div></a></li>
                  <li><a href="#" class="item-link ks-generate-page">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Dynamically Generated Content</div>
                        </div>
                      </div></a></li>
                  <li><a href="transitions.html" class="item-link">
                      <div class="item-content">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                          <div class="item-title">Transitions And Effects</div>
                        </div>
                      </div></a></li>
                </ul>
              </div>
              <div class="content-block-title">Core Features</div>
              <div class="content-block">
                <p><a href="core-features.html" class="button">Read About Core Features</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="popup demo-popup">
      <div class="view navbar-fixed">
        <div class="pages">
          <div class="page">
            <div class="navbar">
              <div class="navbar-inner">
                <div class="center">Popup Title</div>
                <div class="right"><a href="#" class="link close-popup">Done</a></div>
              </div>
            </div>
            <div class="page-content">
              <div class="content-block">
                <p>Here comes popup. You can put here anything, even independent view with its own navigation. Also not, that by default popup looks a bit different on iPhone/iPod and iPad, on iPhone it is fullscreen.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus mauris leo, eu bibendum neque congue non. Ut leo mauris, eleifend eu commodo a, egestas ac urna. Maecenas in lacus faucibus, viverra ipsum pulvinar, molestie arcu. Etiam lacinia venenatis dignissim. Suspendisse non nisl semper tellus malesuada suscipit eu et eros. Nulla eu enim quis quam elementum vulputate. Mauris ornare consequat nunc viverra pellentesque. Aenean semper eu massa sit amet aliquam. Integer et neque sed libero mollis elementum at vitae ligula. Vestibulum pharetra sed libero sed porttitor. Suspendisse a faucibus lectus.</p>
                <p>Duis ut mauris sollicitudin, venenatis nisi sed, luctus ligula. Phasellus blandit nisl ut lorem semper pharetra. Nullam tortor nibh, suscipit in consequat vel, feugiat sed quam. Nam risus libero, auctor vel tristique ac, malesuada ut ante. Sed molestie, est in eleifend sagittis, leo tortor ullamcorper erat, at vulputate eros sapien nec libero. Mauris dapibus laoreet nibh quis bibendum. Fusce dolor sem, suscipit in iaculis id, pharetra at urna. Pellentesque tempor congue massa quis faucibus. Vestibulum nunc eros, convallis blandit dui sit amet, gravida adipiscing libero.</p>
                <p>Morbi posuere ipsum nisl, accumsan tincidunt nibh lobortis sit amet. Proin felis lorem, dictum vel nulla quis, lobortis dignissim nunc. Pellentesque dapibus urna ut imperdiet mattis. Proin purus diam, accumsan ut mollis ac, vulputate nec metus. Etiam at risus neque. Fusce tincidunt, risus in faucibus lobortis, diam mi blandit nunc, quis molestie dolor tellus ac enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum turpis a velit vestibulum pharetra. Vivamus blandit dapibus cursus. Aenean lorem augue, vehicula in eleifend ut, imperdiet quis felis.</p>
                <p>Duis non erat vel lacus consectetur ultricies. Sed non velit dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel varius mi, a tristique ante. Vivamus eget nibh ac elit tempor bibendum sit amet vitae velit. Proin sit amet dapibus nunc, non porta tellus. Fusce interdum vulputate imperdiet. Sed faucibus metus at pharetra fringilla. Fusce mattis orci et massa congue, eget dapibus ante rhoncus. Morbi semper sed tellus vel dignissim. Cras vestibulum, sapien in suscipit tincidunt, lectus mi sodales purus, at egestas ligula dui vel erat. Etiam cursus neque eu lectus eleifend accumsan vitae non leo. Aliquam scelerisque nisl sed lacus suscipit, ac consectetur sapien volutpat. Etiam nulla diam, accumsan ut enim vel, hendrerit venenatis sem. Vestibulum convallis justo vitae pharetra consequat. Mauris sollicitudin ac quam non congue.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="popover popover-menu">
      <div class="popover-angle"></div>
      <div class="popover-inner">
        <div class="list-block">
          <ul>
            <li><a href="modals.html" class="list-button item-link">Modals</a></li>
            <li><a href="popover.html" class="list-button item-link">Popover</a></li>
            <li><a href="tabs.html" class="list-button item-link">Tabs</a></li>
            <li><a href="panels.html" class="list-button item-link">Side Panels</a></li>
            <li><a href="list-view.html" class="list-button item-link">List View</a></li>
            <li><a href="forms.html" class="list-button item-link">Forms</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="popover popover-music">
      <div class="popover-angle"></div>
      <div class="popover-inner">
        <div class="list-block media-list">
          <ul>
            <li><a href="#" class="item-link item-content">
                <div class="item-media"><img src="http://hhhhold.com/88/d/jpg?13" width="44"></div>
                <div class="item-inner">
                  <div class="item-title-row">
                    <div class="item-title">Yellow Submarine</div>
                  </div>
                  <div class="item-subtitle">Beatles</div>
                </div></a></li>
            <li><a href="#" class="item-link item-content">
                <div class="item-media"><img src="http://hhhhold.com/88/d/jpg?23" width="44"></div>
                <div class="item-inner">
                  <div class="item-title-row">
                    <div class="item-title">Don't Stop Me Now</div>
                  </div>
                  <div class="item-subtitle">Queen</div>
                </div></a></li>
            <li><a href="#" class="item-link item-content">
                <div class="item-media"><img src="http://hhhhold.com/88/d/jpg?33" width="44"></div>
                <div class="item-inner">
                  <div class="item-title-row">
                    <div class="item-title">Billie Jean</div>
                  </div>
                  <div class="item-subtitle">Michael Jackson</div>
                </div></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="login-screen">
      <div class="view">
        <div class="page">
          <div class="page-content login-screen-content">
            <div class="login-screen-title">Framework7</div>
            <form>
              <div class="list-block">
                <ul>
                  <li class="item-content">
                    <div class="item-inner">
                      <div class="item-title label">Username</div>
                      <div class="item-input">
                        <input type="text" name="username" placeholder="Your username">
                      </div>
                    </div>
                  </li>
                  <li class="item-content">
                    <div class="item-inner">
                      <div class="item-title label">Password</div>
                      <div class="item-input">
                        <input type="password" name="password" placeholder="Your password">
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="list-block">
                <ul>
                  <li><a href="#" class="item-link list-button">Sign In</a></li>
                </ul>
                <div class="list-block-label">Some text about login information.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/framework7.js"></script>
    <script type="text/javascript" src="js/f7-2.js"></script>
  </body>
</html>