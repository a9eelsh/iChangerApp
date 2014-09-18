<?php
//retrieve our data from POST
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
 
if($password1 != $password2)
    header('Location: register.php');
 
if(strlen($username) > 30)
    header('Location: register.php');

$hash = hash('sha256', $password1);
 
function createSalt()
{
    $text = md5(uniqid(rand(), true));
    return substr($text, 0, 3);
}
 
$salt = createSalt();
$password = hash('sha256', $salt . $hash);
$conn = mysql_connect('mysql.thelocken.com', 'rosco1502', '45564556bg');
mysql_select_db('thelocken_test_db', $conn);
 
//sanitize username
$username = mysql_real_escape_string($username);
 
$query = "INSERT INTO member ( username, password, email, salt )
        VALUES ( '$username', '$password', '$email', '$salt' );";
mysql_query($query);
 
mysql_close();
 
header('Location: login.php');
?>