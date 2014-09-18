<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>iChanger 404!</title>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="stylesheet" href="ui/css/main.css">
  <link rel="stylesheet" href="ui/css/demo.css">
  <link rel="stylesheet" href="ui/css/app.css">
  <link rel="stylesheet" href="ui/css/framework7.min.css">
  <script src="js/functions.js" type="text/javascript"></script>
	<body ontouchstart="">
  <script>
    function goBack() {
        window.history.back()
    }
  </script>
</head>
<body>
	<h1>Grats.</h1><h2>You broke it.</h2>(404 - Not Found)
	<p>You tried to access <?php
 
if (isset($_SERVER['HTTP_REFERER'])) // check if referrer is set
{
    echo $_SERVER['HTTP_REFERER']; // echo referrer
}
else
{
    echo 'ERROR_IN_RETRIEVING_URL'; // echo failure message
}
 
?> but,</p>
	<p>That page doesn't exist or some other horrible error has occurred.</p>
	<p><button onclick="goBack()">Go Back</button> or <button onclick="http://iChanger.tk/">Go Home</button></p>
</body>
</html>