<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://minecraft.thelocken.com/js/jquery-1.10.2.min.js"></script>
<script src="http://minecraft.thelocken.com/js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script src="http://minecraft.thelocken.com/js/script1.js"></script>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta content="index,follow" name="robots" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="Make!.png" rel="apple-touch-icon-precomposed" />
<meta content="minimum-scale=1.0, width=device-width,maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="http://www.thelocken.com/iChanger/Core/iChanger/css/style.css" rel="stylesheet" media="screen" type="text/css" />
<link href="iOS7.css--" rel="stylesheet" type="text/css" />
<script src="http://www.thelocken.com/iChanger/Core/iChanger/javascript/functions.js" type="text/javascript"></script>
<title>iPeeps Make!</title>
<meta content="iPod,iPhone,Themes,iChanger,Website,WebApp,mobile,Winterboard,Without,jailbreak,free" name="Keywords" />
<meta content="iPeeps Make!" name="description" />
</head>
<body>

<div id="topbar">
	<div id="title">
		   iPeeps Make!</div>
	<div id="leftnav">
		<a href="http://www.thelocken.com/iChanger/"><img alt="home" src="http://www.thelocken.com/iChanger/Core/iChanger/images/home.png" /></a></div>
</div>

<div id="content">
		<ul class="pageitem">
		<li class="textbox"><span class="header">Welcome to iPeeps Make!</span><p>
		iPeeps Make! is a custom iPeep Maker. You do have to have an OwnCloud account to make one though.</p>
		<li class="menu"><a href="profiles.html">
		<img alt="list" src="owncloud.png" /><span class="name">Request OwnCloud Account</span><span class="comment"></span><span class="arrow"></span></a></li>
		</ul>
		

	<ul class="pageitem">
		<li class="textbox"><span class="header"></span><p>
		To Make a Custom iPeep Please Fill out the Boxes Below!</p>
	</ul>
		
    	<ul class="pageitem">
		<li class="textbox"><span class="header"></span><p>
		    <form action="" method="POST">
            <p><a href="file1.php">Upload Picture</a></p>
            <p>Phone Number:</p><p><input type="text" name="input_textvar" placeholder="951-121-1221"></p>
            <p>Picture Name:</p><p><select name="s1">
                <option value="" selected="selected">Picture Name...</option>
                  <?php 
                  foreach(glob(dirname(__FILE__) . '/*') as $filename){
                   $filename = basename($filename);
                   echo "<option value='" . $filename . "'>".$filename."</option>";
                    }
                    ?></select> </p>
            <p></p><p><!--<input type="text" name="input_ownclouduser" placeholder="Optional">--></p>
            <p>Default iPeeps Name:</p><p><input type="text" name="input_name" placeholder="Bob Joe"></p>
            <p><input class="button" type="submit" name="submit" value="Make iPeep!"></p></p>
	</ul>
       	<ul class="pageitem">
		<li class="textbox"><span class="header" id="NAVupload"></span><p>
		    <form action="" method="POST">

            </p>
	</ul>
	<ul class="pageitem">
		<li class="textbox"><span class="header"></span><p>
		<?php echo "<a href='Make.php?t=" . $_REQUEST['input_textvar'] . "&p=" . $_REQUEST['input_picvar'] . "&n=" . $_REQUEST['input_name'] . "&u=" . $_REQUEST['input_ownclouduser'] . "'> Install </a>" ?></p>
	</ul>
	

		
</div>
<div id="footer"><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_US">
	<img alt="Creative Commons License" style="border-width:0" src="i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" /></a>
	<br />
	<span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">iChanger</span>
	by <a xmlns:cc="http://creativecommons.org/ns#" href="http://twitter.com/rosco1502" property="cc:attributionName" rel="cc:attributionURL">Rosco1502</a>
	is licensed under a 
	<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_US">
		Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>.
		<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="index.html" rel="dct:source">
			http://thelocken.com/iChanger</a>.</a></div>
    <?php
if (isset($_POST['submit']))
  {
  // Execute this code if the submit button is pressed.
  $formvalue = $_POST['input_textvar'];
  $formvalue = $_POST['input_picvar'];
  $formvalue = $_POST['input_ownclouduser'];
  $formvalue = $_POST['input_name'];
  $formvalue = $_POST['s1'];
  }
?>
    </body>
</html>