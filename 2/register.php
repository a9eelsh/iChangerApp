<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>iChanger 2 Register</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="ui/css/framework7.css">
    <link rel="stylesheet" href="ui/css/framework7.min.css">
	<!-- Path to your custom app styles-->
    <link rel="stylesheet" href="ui/css/f7-2.css">
    <link rel="stylesheet" href="ui/css/tabs.css">
	<link rel="stylesheet" href="ui/css/app.css">
	<link rel="stylesheet" href="ui/css/nav.css">
	<!--<script type="text/javascript" src="js/staystand.js"></script>-->
  <link rel="stylesheet" href="ui/css/load.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(window).load(function() {
	$(".loader").fadeOut("slow");
    })
  </script>
	</head>
	<script type="text/javascript">
function loadLogin() {
	document.getElementById('inner').innerHTML = "<a href=''";
	window.open("http://ichanger.tk/login.html");
}
</script>
  <body>
	  <div class="loader"></div>
    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <div class="page-content">
      <!--<div class="content-block">
        <!--<p><a href="#" class="open-login-screen">Open Login Screen</a></p>
      </div>
    </div>-->
  <div class="login-screen modal-in">
    <div class="view">
      <div class="page">
        <div class="page-content login-screen-content">
          <div class="login-screen-title">iChanger 2 - Register</div>
          <form id="form1" name="register" method="post" action="register.php">
            <div class="list-block">
              <ul>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title label">Username</div>
                    <div class="item-input">
                      <input type="text" name="username" id="username" maxlength="20" placeholder="Your username">
                    </div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title label">Password</div>
                    <div class="item-input">
                      <input type="password" name="password1" placeholder="Your password">
                    </div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title label">Password</div>
                    <div class="item-input">
                      <input type="password" name="password2" placeholder="Repeat Password">
                    </div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title label">Email</div>
                    <div class="item-input">
                      <input type="email" name="email" id="email" placeholder="Your Email">
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="list-block">
              <ul>
                <li><input class="button button-big" type="submit" name="button submit" id="button" value="Log In!" /></li>
              </ul>
              <div class="list-block-label">
                <p>iChanger requires you to have an account so you can access info private to you. Once you login open the menu-panel and click "Privacy Policy" or "Why Login?" for more info.</p>
                <p><a href="login.html" class="external">Have an Account? Log In</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="js/framework7.min.js"></script>
    <!-- Path to TheLocken F7-2W js-->
    <script type="text/javascript" src="js/f7-2.js"></script>
	<!-- Path to TheLocken StayStand js -->
	<script type="text/javascript" src="js/staystand.js"></script>
  </body>
</html>