<?php
$xml = new SimpleXMLElement(file_get_contents("http://ichangerapp.com/user/users/test.xml"));
$UserID = $xml->UserID;
$username = $xml->username;
echo "UserID: $UserID<br/>username: $username";