<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>iChanger</title>
    <link rel="stylesheet" href="ui/css/framework7.css">
    <link rel="stylesheet" href="ui/css/framework7.min.css">
	<link rel="stylesheet" href="ui/css/framework7.themes.css">
	<link rel="stylesheet" href="ui/css/f7-2.css">
	<link rel="stylesheet" href="ui/css/app.css?v=8">
  </head>
  <body>
    <!-- Status bar overlay for full screen mode (PhoneGap) -->
    <div class="statusbar-overlay"></div>
    <!-- Views -->
    <div class="views">
      <!-- Your main view, should have "view-main" class -->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <!-- We need cool sliding animation on title element, so we have additional "sliding" class -->
            <div class="center sliding">Awesome App</div>
          </div>
        </div>
        <!-- Pages container, because we use fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Page, "data-page" contains page name -->
          <div data-page="index" class="page">
            <!-- Scrollable page content -->
            <div class="page-content">
              <p>Page content goes here</p>
              <!-- Link to another page -->
              <a href="about.html">About app</a>
            </div>
          </div>
        </div>
        <!-- Bottom Toolbar-->
        <div class="toolbar">
          <div class="toolbar-inner">
            <!-- Toolbar links -->
            <a href="#view-2" class="link">Link 1</a>
            <a href="#" class="link">Link 2</a>
          </div>
        </div>
      </div>
      
            <div id="view-2" class="view tab">
        <!-- We can make with view with navigation, let's add Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <div class="center sliding">iChanger - Custom</div>
            <div class="right"><a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a></div>
          </div>
        </div>
        <div class="pages navbar-through">
          <div data-page="index-1" class="page">
            <div class="page-content">
<div class="content-block-title">Customize!</div>
<div class="list-block">
	<!-- 
	
	Start Form 
	
	-->
<form onsubmit="" action="http://www.ichangerapp.com/custom/customend.php?req=custom" method="post" enctype="multipart/form-data">
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
      <div class="item-content">
        <div class="item-media"><i class="icon icon-custom-app"></i></div>
        <div class="item-inner">
          <div class="item-title label">Open</div>
          <div class="item-input">
            <select id="app" name="app">
              <option>App Store</option>
              <option>Calendar</option>
              <option>Facetime</option>
              <option>GameCenter</option>
              <option>iBooks</option>
              <option>iTunes</option>
              <option>Mail</option>
              <option>Maps</option>
              <option>Messages</option>
              <option>Music</option>
              <option>Passbook</option>
              <option>Phone</option>
              <option>Reminders</option>
              <option>Remote</option>
              <option>Safari</option>
              <option>Videos</option>
              <option>Chrome</option>
              <option>Facebook</option>
              <option>Twitter</option>
              <option>Flipboard</option>
              <option>YouTube</option>
              <option>Instagram</option>
              <option>Skype</option>
              <option>Photos</option>
              <option>Google</option>
              <option>Google+</option>
              <option>iChanger</option>
              <option>URI Scheme</option>
            </select>
          </div>
        </div>
      </div>
    </li>
    <!-- Date -->
    <li>
      <div class="item-content">
        <div class="item-media"><i class="icon icon-custom-icon"></i></div>
        <div class="item-inner">
          <div class="item-title label">Icon</div>
          <div class="item-input">
            <input name="file" id="file" type="file" accept="image/*" capture="camera" value="Choose Icon">
          </div>
        </div>
      </div>
    </li>
    <!--              ---- FACEBOOK ----                  --->
    <div id="FacebookFunction" style="display:none;">
    <li>
      <div class="item-content">
        <div class="item-media"><i class="icon icon-custom-func"></i></div>
        <div class="item-inner">
          <div class="item-title label">Function</div>
          <div class="item-input">
            <select id="FBResult" name="func">
              <option>Your Profile</option>
              <option>Friends List</option>
              <option>Notification List</option>
              <option>News Feed</option>
              <option>Events Feed</option>
              <option>Requests List</option>
              <option>Notes Page</option>
              <option>Photo Albums</option>
              <option>Mailbox</option>
              <option>Messaging</option>
            </select>
          </div>
        </div>
      </div>
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
              <option>----</option>
              <option>Timeline</option>
              <option>Mentions</option>
              <option>Messages</option>
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
              <option>----</option>
              <option>None</option>
              <option>Open Video</option>
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
	<input type="submit" name="submit" value="Create!" class="button button-big button-round color-red">
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
    </div>
    <script type="text/javascript" src="js/framework7.min.js"></script>
    <script type="text/javascript" src="js/f7-2.js"></script>
  </body>
</html> 