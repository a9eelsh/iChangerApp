<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
/*  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
} */
?>
  <link href="http://www.lockenfiles.tk/cdn/h5form/test/qunit.css" rel="stylesheet" />
  <link href="http://www.lockenfiles.tk/cdn/h5form/style0000000.css" media="screen" rel="stylesheet" type="text/css" />
<!--<style>
	.ui-state-error {
	background-color:#BB1100;
	color:white;
	}
</style>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>  
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.js"></script>-->
  <!--<script>
  	$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});

	$().ready(function() {
		// validate the comment form when it is submitted
		$("#commentForm").validate();

		// validate signup form on keyup and submit
		$("#customForm").validate({
			rules: {
				title: "required",
				lastname: "required",
				username: {
					required: true,
					minlength: 2
				},
				password: {
					required: true,
					minlength: 5
				},
				confirm_password: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true
				},
				topic: {
					required: "#newsletter:checked",
					minlength: 2
				},
				agree: "required"
			},
			messages: {
				firstname: "Please enter your firstname",
				lastname: "Please enter your lastname",
				username: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 2 characters"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				email: "Please enter a valid email address",
				agree: "Please accept our policy"
			}
		});

		// propose username by combining first- and lastname
		$("#username").focus(function() {
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			if (firstname && lastname && !this.value) {
				this.value = firstname + "." + lastname;
			}
		});

		//code to hide topic selection, disable for demo
		var newsletter = $("#newsletter");
		// newsletter topics are optional, hide at first
		var inital = newsletter.is(":checked");
		var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
		var topicInputs = topics.find("input").attr("disabled", !inital);
		// show when newsletter is checked
		newsletter.click(function() {
			topics[this.checked ? "removeClass" : "addClass"]("gray");
			topicInputs.attr("disabled", !this.checked);
		});
	});
	</script>-->
  <link rel="stylesheet" href="ui/css/load.css">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <script type="text/javascript">
    $(window).load(function() {
	$(".loader").fadeOut("slow");
    })
  </script>
  <!--<script>
  	$("form").validate({
    submitHandler: function () {
        alert('successful submit');
    }
    });
  </script>
  <style>
	.error {
    	color:red;
    }
  </style>-->
  <!--<script>
	function validateForm() {
	    var x = document.forms["form"]["name"].value;
	    if (x==null || x=="") {
	        document.write('<div>Print this after the script tag</div>');
	        return false;
	    }
	}
  </script>-->
	  <div class="loader"></div>
        <div class="navbar">
          <div class="navbar-inner">
			      <div class="left sliding"><a href="mainf7.php<?php print $uend; ?>" class="back link"><i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">iChanger 2 - Custom</div>
            <div class="right"><a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a></div>
          </div>
        </div>
        <div class="pages navbar-through">
          <div data-page="index-1" class="page">
            <div class="page-content">
<div class="content-block-title">Customize!</div>
<div class="list-block">
	<!--<form id="form1" class="h5-defaults" data-h5-instanceid="0" novalidate="novalidate">
		<label for="name">Your Name:*</label>
		<input id="name" name="name" type="text" placeholder="Bob" title="Your name is required." required="" class="h5-active ui-state-error">
		<p><em>Hint: Select it, then click somewhere else without typing anything.</em></p>
		<input type="submit" value="Submit" class="ui-state-valid">
	</form>-->
	<!-- 
	
	Start Form 
	
	-->
<form onsubmit="" action="http://www.ichanger.tk/custom/customend.php" method="post" enctype="multipart/form-data">
  <ul>
    <!-- Text inputs -->
    <li>
      <div class="item-content">
        <div class="item-media"><i class="icon icon-form-name"></i></div>
        <div class="item-inner">
          <div class="item-title label">Title:*</div>
          <div class="item-input">
            <input id="title" name="title" type="text">
			<!-- <div id="invalid-FirstName" class="ui-state-error message" style="">Required: Please provide your first name.</div>-->
			<!-- <input id="birthdate" name="name" type="text" placeholder="mm/dd/yyyy" title="mm/dd/yyyy" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d" class="h5-active ui-state-valid"> -->
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
    <!-- Select --
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
    Date -->
    <li>
      <div class="item-content">
        <div class="item-media"><i class="icon icon-form-calendar"></i></div>
        <div class="item-inner">
          <div class="item-title label">Icon</div>
          <div class="item-input">
            <input name="file" id="file" type="file" accept="image/*" capture="camera" class="list-val button " value="Choose Icon">
          </div>
        </div>
      </div>
    </li>
    <!-- Date time--
    <li>
      <div class="item-content">
        <div class="item-media"><i class="icon icon-form-calendar"></i></div>
        <div class="item-inner">
          <div class="item-title label">Date time</div>
          <div class="item-input">
            <input type="datetime-local">
          </div>
        </div>
      </div>
    </li>
    !-- Switch (Checkbox) --
    <li>
      <div class="item-content">
        <div class="item-media"><i class="icon icon-form-toggle"></i></div>
        <div class="item-inner">
          <div class="item-title label">Switch</div>
          <div class="item-input">
            <label class="label-switch">
              <input name="switch" id="switch" type="checkbox">
              <div class="checkbox"></div>
            </label>
          </div>
        </div>
      </div>
    </li>
    <!-- Slider (Range input) --
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
    <!-- Textarea --
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
    </li>-->
  </ul>
	<input type="submit" name="submit" class="button">
	</form>
</div>
	<div class="content-block-title">Notice</div>
    <div class="content-block">
        <p>Icons are deleted off our server after 10 hours of being uploaded to keep our servers happy.</p>
        <p><a href="#" data-popup=".popup-privacy" value="Create!" class="open-popup close-panel item-link">When you use iChanger you agree to the Privacy Policy</a></p>
    </div>