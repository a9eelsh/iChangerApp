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
<form onsubmit="" action="http://www.ichangerapp.com/custom/file_upload.php" method="post" enctype="multipart/form-data">
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