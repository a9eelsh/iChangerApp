<?php
$isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
$titlesize = "";
?>

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
	  <link rel="stylesheet" href="ui/css/minor.css?v=3">
	  <link rel="stylesheet" href="ui/css/app.css">
	  <link rel="stylesheet" href="ui/css/title.css?v=5">
	  <!-- JS -->
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	  <script type="text/javascript" src="//wurfl.io/wurfl.js"></script>
	  <script>
	    $(document).on('change', '.btn-file :file', function() {
  var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
        
    });
});

/* 
Just some abritrary dumb thing to force redraw
*/

jQuery("#res").fitText();
	  </script>
  </head>
  <body>
    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Left panel with reveal effect-->
    <div class="panel panel-left panel-reveal">
      <div class="content-block">
        <p>Left panel content goes here<?php print $titlesize; print $isiPad; ?></p>
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
          <!-- Navbar inner for Browse page-->
          <div data-page="browse" class="navbar-inner cached">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">Browse</div>
          </div>
          <!-- Navbar inner for Create page-->
          <div data-page="create" class="navbar-inner cached">
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
                    <a href="browse.php">
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
<div class="content-block-title">Create!</div>
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
    <script type="text/javascript" src="js/framework7.min.js"></script>
    <script type="text/javascript" src="js/mainview.js"></script>
    <script type="text/javascript" src="js/jquery.fittext.js"></script>
    <script>
        $(window).resize(function() {
          $("h1").css({ "font-size": "<?php print $titlesize; ?>vw" }); 
        });
        $("h1").css({ "font-size": "<?php print $titlesize; ?>vw" }); 
    </script>
  </body>
</html>