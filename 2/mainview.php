<?php
$UserID = htmlspecialchars($_GET["id"]);
$isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
if ( $isiPad == "1" ) {
  $titlesize = "10";
} else if ( $isiPad == "0" ) {
  $titlesize = "19";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>iChanger</title>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,400italic,700italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="ui/css/framework7.min.css?v=2">
	  <link rel="stylesheet" href="ui/css/framework7.themes.min.css?v=2">
	  <link rel="stylesheet" href="ui/css/minor.css?v=4">
	  <link rel="stylesheet" href="ui/css/app.css">
	  <link rel="stylesheet" href="ui/css/title.css?v=5">
	  <!-- JS -->
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  </head>
  <body>
    <style>
.alert {
	padding: 19px 15px;
	color: #fefefe;
	position: relative;
	font: 14px/20px Museo300Regular, Helvetica, Arial, sans-serif;
}
.alert .msg { padding: 0 20px 0 40px;}
.alert p { margin: 0;}
.alert .toggle-alert {
	position: absolute;
	top: 7px;
	right: 10px;
	display: block;
	text-indent: -10000px;
	width: 20px;
	height: 20px;
	border-radius: 10px;
	-webkit-box-shadow: inset 1px 1px 2px rgba(0, 0, 0, 0.1), 1px 1px 1px rgba(255, 255, 255, 0.1);
	-moz-box-shadow: inset 1px 1px 2px rgba(0, 0, 0, 0.1), 1px 1px 1px rgba(255, 255, 255, 0.1);
	box-shadow: inset 1px 1px 2px rgba(0, 0, 0, 0.1), 1px 1px 1px rgba(255, 255, 255, 0.1);
	background: rgba(0, 0, 0, 0.08) url(images/alert.png) no-repeat 6px 6px;
}
.info-box {		background: #2fa9f6 url(images/info.png) no-repeat 14px 14px;}
.success-box {	background: #7EB62E url(images/success.png) no-repeat 14px 14px;}
.error-box {	background: #f64b2f url(images/error.png) no-repeat 14px 14px;}
.notice-box {	background: #f6ca2f url(images/notice.png) no-repeat 14px 14px;}
.download-box {	background: #a555ca url(images/download.png) no-repeat 14px 14px;}
    </style>
    <script>
     jQuery(document).ready(function() {
        $(".alert .toggle-alert").click(function(){
        $(this).closest(".alert").slideUp();
          return false;
        });
     });

      window.fbAsyncInit = function() {
        FB.init({
          appId      : '537201576422410',
          xfbml      : true,
          version    : 'v2.2'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Left panel with reveal effect-->
    <div class="panel panel-left panel-reveal layout-dark">
<div class="content-block-title">Menu</div>
<div class="list-block">
  <ul>
    <li>
      <a href="#" class="item-link item-content">
        <div class="item-media"><i class="icon icon-menu-tutorial"></i></div>
        <div class="item-inner">
          <div class="item-title">FAQ</div>
        </div>
      </a>
    </li>
    <li>
      <a href="http://j.mp/iC2Issue" class="item-link item-content external" onclick="window.open('http://j.mp/iC2Issue', '_system', 'location=yes'); return false;">
        <div class="item-media"><i class="icon icon-menu-reportaproblem"></i></div>
        <div class="item-inner">
          <div class="item-title">Report Issue</div>
        </div>
      </a>
    </li>
    <li>
      <a href="#class" data-popup=".popup-credits" class="item-link item-content open-popup">
        <div class="item-media"><i class="icon icon-menu-about"></i></div>
        <div class="item-inner">
          <div class="item-title">Credits</div>
        </div>
      </a>
    </li>
  </ul>
  <div class="list-block-label">
    <p>iC v3b</p>
    <p>Framework v1.0.3</p>
    <p>IiP <?php print $isiPad; ?></p>
    <p>UserID <?php print $UserID; ?></p>
    <p><div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div></p>
  </div>
</div>
    </p>
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
        <div class="navbar skybluenavbar theme-white">
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
          <!-- Navbar inner for Browse page-->
          <div data-page="browse" class="navbar-inner cached">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">Browse</div>
          </div>
          <!-- Navbar inner for Create page-->
          <div data-page="create" class="navbar-inner cached rednavbar">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">Create</div>
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
                    <a href="browse.php?id=<?php print $UserID; ?>" class="cbutton cbutton--effect-ivana">
                    <center><span class="icon browse"><img src="pics/browse.png"></span></center>
                    <center><span class="tabbar-label browse">Browse</span></center>
                    </a>
                    
                  </div>
                  <div class="col-50">
                    <a href="#create">
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
          <!-- Create Page -->
          <div data-page="create" class="page cached">
          <div class="page-content">
<script>
  function pleaseWait() {
     document.getElementById('material-design').style.display = 'block';
  }
</script>
<div class="info-box alert material-design" id="material-design" style="display: none;">
<div class="msg">Creating you custom shortcut, Please Wait.</div>
<a class="toggle-alert" href="#">Close</a>
</div>
<div class="list-block">
	<!-- 
	
	Start Form 
	
	-->
<form action="/custom/createfinal.php?id=<?php print $UserID; ?>" method="post" enctype="multipart/form-data" onsubmit="pleaseWait();">
  <ul>
    <!-- Text inputs -->
    
    <li>
      <div class="item-content">
        <div class="item-media"><i class="icon icon-custom-title"></i></div>
        <div class="item-inner">
          <div class="item-title label">Title</div>
          <div class="item-input">
            <input id="title" name="title" type="text">         </div>
        </div>
      </div>
    </li>
    <!-- Select -->
    <li>
          <a href="#" class="item-link smart-select" data-searchbar="true" data-searchbar-placeholder="Search apps">
            <select id="app" name="app">
              <option value="App Store">App Store</option>
              <option value="Calendar">Calendar</option>
              <option value="Facetime">Facetime</option>
              <option value="GameCenter">GameCenter</option>
              <option value="iBooks">iBooks</option>
              <option value="iTunes">iTunes</option>
              <option value="Mail">Mail</option>
              <option value="Maps">Maps</option>
              <option value="Messages">Messages</option>
              <option value="Music">Music</option>
              <option value="Passbook">Passbook</option>
              <option value="Phone">Phone</option>
              <option value="Reminders">Reminders</option>
              <option value="Remote">Remote</option>
              <option value="Safari">Safari</option>
              <option value="Videos">Videos</option>
              <option value="Chrome">Chrome</option>
              <option value="Facebook">Facebook</option>
              <option value="Twitter">Twitter</option>
              <option value="Flipboard">Flipboard</option>
              <option value="YouTube">YouTube</option>
              <option value="Instagram">Instagram</option>
              <option value="Skype">Skype</option>
              <option value="Photos">Photos</option>
              <option value="Google">Google</option>
              <option value="Google+">Google+</option>
              <option value="iChanger">iChanger</option>
              <option value="URI Scheme">URI Scheme</option>
            </select>
          <div class="item-content">
          <div class="item-media"><i class="icon icon-custom-app"></i></div>
          <div class="item-inner">
            <!-- Select label -->
            <div class="item-title">App</div>
            <!-- Selected value, not required -->
          </div>
        </div>
      </a>
    </li>
    <!-- Date -->
    <li>
      <div class="item-content">
        <div class="item-media"><i class="icon icon-custom-icon"></i></div>
        <div class="item-inner">
          <div class="item-title label">Icon</div>
          <div class="item-input">
            <input type="file" name="file" id="file" accept="image/*"><br>
          </div>
        </div>
      </div>
    </li>
    <!--              ---- FACEBOOK ----                  --->
    <div id="FacebookFunction" style="display:none;">
    <li>
      <a href="#" class="item-link smart-select" data-searchbar="true" data-searchbar-placeholder="Search functions">
            <select id="FBResult" name="func">
              <option value="Your Profile">Your Profile</option>
              <option value="Friends List">Friends List</option>
              <option value="Notification List">Notification List</option>
              <option value="News Feed">News Feed</option>
              <option value="Events Feed">Events Feed</option>
              <option value="Requests List">Requests List</option>
              <option value="Notes Page">Notes Page</option>
              <option value="Photo Albums">Photo Albums</option>
              <option value="Mailbox">Mailbox</option>
              <option value="Messaging">Messaging</option>
            </select>
          <div class="item-content">
          <div class="item-media"><i class="icon icon-custom-func"></i></div>
          <div class="item-inner">
            <!-- Select label -->
            <div class="item-title">Function</div>
            <!-- Selected value, not required -->
          </div>
        </div>
      </a>
    </li>
    </div>
    <!--            END FACEBOOK FUCNTIONS                         -->
    <!--              ---- Twitter ----                  --->
    <div id="TwitterFunction" style="display:none;">
    <li>
      <div class="item-content">
        <div class="item-media"><i class="icon icon-custom-func"></i></div>
        <div class="item-inner">
          <div class="item-title label">Function</div>
          <div class="item-input">
            <select id="TWResult" name="func">
              <option value="">----</option>
              <option value="">Timeline</option>
              <option value="">Mentions</option>
              <option value="">Messages</option>
            </select>
          </div>
        </div>
      </div>
    </li>
    </div>
    <!--            END TWITTER FUCNTIONS                         -->
    <!--              ---- YouTube ----                  --->
    <div id="YouTubeFunction" style="display:none;">
    <li>
      <div class="item-content">
        <div class="item-media"><i class="icon icon-custom-func"></i></div>
        <div class="item-inner">
          <div class="item-title label">Function</div>
          <div class="item-input">
            <select id="YTResult" name="func">
              <option value="">----</option>
              <option value="">None</option>
              <option value="">Open Video</option>
            </select>
          </div>
        </div>
      </div>
    </li>
    </div>
    <!--            END YOUTUBE FUCNTIONS                         -->
    <!--     YOUTUBE VIDEO ID IF OPEN VIDEO SELECTED              -->
    <div id="YTVideo" style="display:none;">
    <li>
      <div class="item-content">
        <div class="item-media"><i class="icon icon-custom-video"></i></div>
        <div class="item-inner">
          <div class="item-title label">Video ID</div>
            <div class="item-input">
              <input type="text" name="video" id="video" placeholder="ZZ5LpwO-An4">
            </div>  
        </div>
      </div>
    </li>
    </div>
    <!--           END YOUTUBE VIDEO ID                           -->
    <!--           CUSTOM URI SCHEME ID                           -->
    <div id="UriScheme" style="display:none;">
    <li>
      <div class="item-content">
        <div class="item-media"><i class="icon icon-custom-video"></i></div>
        <div class="item-inner">
          <div class="item-title label">URI</div>
            <div class="item-input">
              <input type="text" name="customuri" id="customuri" placeholder="gamecenter://">
            </div>  
        </div>
      </div>
    </li>
    </div>
    <!--          END CUSTOM URI SCHEME ID                        -->
  </ul>
	<input type="submit" name="submit" value="Create!" class="button button-big color-red">
	</form>
</div>
	<div class="content-block-title">Notice</div>
    <div class="content-block">
        <div id="NWarning" style="display:none;"><p style="color:red"><img src="thumbs/error-50.png" alt="Warning" height="20" width="20">Warning Facebook Notification List is bugged an may not work properly.</p></div>
        <p>Icons are deleted off our server after 10 hours of being uploaded to keep our servers happy.</p>
        <p><a href="#" data-popup=".popup-privacy" value="Create!" class="open-popup close-panel item-link">When you use iChanger you agree to the Privacy Policy</a></p>
    </div>
      </div>
          </div>
        </div>
      </div>
      </div>
      	  <script>
$('#app').on('change',function(){
    if( $(this).val()==="Facebook"){
    $("#FacebookFunction").show()
    }
    else{
    $("#FacebookFunction").hide()
    }
});
$('#app').on('change',function(){
    if( $(this).val()==="Twitter"){
    $("#TwitterFunction").show()
    }
    else{
    $("#TwitterFunction").hide()
    }
});
$('#app').on('change',function(){
    if( $(this).val()==="YouTube"){
    $("#YouTubeFunction").show()
    }
    else{
    $("#YouTubeFunction").hide()
    }
});
$('#app').on('change',function(){
    if( $(this).val()==="URI Scheme"){
    $("#UriScheme").show()
    }
    else{
    $("#UriScheme").hide()
    }
});
$('#FBResult').on('change',function(){
    if( $(this).val()==="Notification List"){
    $("#NWarning").show()
    }
    else{
    $("#NWarning").hide()
    }
});
$('#YTResult').on('change',function(){
    if( $(this).val()==="Open Video"){
    $("#YTVideo").show()
    }
    else{
    $("#YTVideo").hide()
    }
});
</script>
<div class="popup popup-privacy">
<div class="view navbar-fixed">
<div class="pages">
<div class="page">
<div class="navbar theme-white">
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

<div class="popup popup-credits">
<div class="view navbar-fixed">
<div class="pages">
<div class="page">
<div class="navbar theme-white">
<div class="navbar-inner">
<div class="center">Credits</div>
<div class="right"><a href="#" class="link close-popup">Done</a></div>
</div>
</div>
<div class="page-content">
<div class="content-block">
<p>We get icons form various sources, including (but not limited to) <a href="http://deviantart.com/" class="external close-popup">DiviantArt.com</a>, <a href="http://uiconstock.com/" class="external close-popup">UIconStock</a>, etc. with explict permission to use in iChanger.</p>
<p>Extra thanks to <a href="http://ffra.deviantart.com/" class="external close-popup">FFra</a> for supplying amazing icons packs such as Novus, Flatest, Maximal and to <a href="http://dtafalonso.deviantart.com/" class="external close-popup">Dtafalonso</a> for creating awesome packs such as iOS 7 Alternative, iOS 7 Icons (#1-7)</p>
<p>Credits to <a href="http://icons8.com/" class="external close-popup">Icons8</a> for providing some icons throughout the app.</p></div>
</div>
</div>
</div>
</div>
</div>
    <script type="text/javascript" src="js/framework7.min.js"></script>
    <script type="text/javascript" src="js/mainview.js"></script>
    <script>
        $(window).resize(function() {
          $("h1").css({ "font-size": "<?php print $titlesize; ?>vw" }); 
        });
        $("h1").css({ "font-size": "<?php print $titlesize; ?>vw" }); 
    </script>
  </body>
</html>