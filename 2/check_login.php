<?php
$host="mysql.thelocken.com"; // Host name
$username="rosco1502"; // Mysql username
$password="45564556bg"; // Mysql password
$db_name="thelocken_test_db"; // Database name
$tbl_name="test"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or
die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and
password='$mypassword'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count==1){
session_register("myusername");
session_register("mypassword");
header("location:login_success.php");
}
else {
echo "
<link rel='stylesheet' href='ui/css/login.css'>
    <script>document.write('<div class='js'>'); // demo only </script>
    <!-- The alert is activated by toggling the 'in' class. -->
    <div class='alert in'>
      <!-- The top margin must be set to 50% of the alert's height using JavaScript. -->
      <div class='alert-content' style='margin-top: -85px;'>
			<h3>Warning</h3>
			<p>Invalid Information, Please Try Again</p>
        <div class='alert-buttons'>
          <a href='index.html' class='alert-button right primary'>OK</a>
          <a href='index.html' class='alert-button left'>Cancel</a>
        </div>
      </div>
    </div>
    <script>document.write('</div>'); // demo only </script>
  </div>

";
}
?>
