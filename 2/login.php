<?php
ob_start();
session_start();
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$conn = mysql_connect('mysql.thelocken.com', 'rosco1502', '45564556bg');
mysql_select_db('thelocken_test_db', $conn);
 
$username = mysql_real_escape_string($username);
$query = "SELECT id, username, password, salt
        FROM member
        WHERE username = '$username';";
 
$result = mysql_query($query);
 
if(mysql_num_rows($result) == 0) // User not found. So, redirect to login_form again.
{
    header('Location: login.html');
}
 
$userData = mysql_fetch_array($result, MYSQL_ASSOC);
$hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );
 
if($hash != $userData['password']) // Incorrect password. So, redirect to login_form again.
{
    header('Location: login.html');
}else{ // Redirect to home page after successful login.
	session_regenerate_id();
	$_SESSION['sess_user_id'] = $userData['id'];
	$_SESSION['sess_username'] = $userData['username'];
	session_write_close();
	header('Location: mainf7.php');
}
?>