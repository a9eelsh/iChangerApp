<?php
//Variables for the connection:
$m_Host = "mysql.thelocken.com"; 
$m_User = "rosco1502"; 
$m_Pass = "45564556bg"; 
$m_DB = "thelocken_test_db";

//Code for connection:
$connect = mysqli_connect("mysql.thelocken.com","rosco1502","45564556bg","thelocken_test_db");
echo '<b style="color:#298A08;">Connected to MYSQL!</b>';
?>