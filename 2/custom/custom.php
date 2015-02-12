        <div class="navbar">
          <div class="navbar-inner">
			      <div class="left sliding"><a href="mainview.php" class="back link"><i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">iChanger - Browse</div>
            <div class="right"><a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a></div>
          </div>
        </div>
        <div class="pages navbar-through">
          <div data-page="index-1" class="page">
            <div class="page-content">
<div class="list-block">
	<!-- 
	
	Start Form 
	
	-->
<form onsubmit="" action="http://www.ichangerapp.com/custom/customend.php?req=custom" method="post" enctype="multipart/form-data">
  <ul>
    <!-- Text inputs -->
    <li>
      <div class="item-content">
        <div class="item-media"><i class="icon icon-form-name"></i></div>
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
        <div class="item-media"><i class="icon icon-form-gender"></i></div>
        <div class="item-inner">
          <div class="item-title label">App</div>
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
              <?php /*<!--<option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>-->*/ ?>
            </select>
          </div>
        </div>
      </div>
    </li>
    <!-- Date -->
    <li>
      <div class="item-content">
        <div class="item-media"><i class="icon icon-form-calendar"></i></div>
        <div class="item-inner">
          <div class="item-title label">Icon</div>
          <div class="item-input">
            <input name="file" id="file" type="file" accept="image/*" capture="camera" class="list-val button picupload" value="Choose Icon">
          </div>
        </div>
      </div>
    </li>
  </ul>
	<input type="submit" name="submit" class="button">
	</form>
</div>
	<div class="content-block-title">Notice</div>
    <div class="content-block">
        <p>Icons are deleted off our server after 10 hours of being uploaded to keep our servers happy.</p>
        <p><a href="#" data-popup=".popup-privacy" value="Create!" class="open-popup close-panel item-link">When you use iChanger you agree to the Privacy Policy</a></p>
    </div>