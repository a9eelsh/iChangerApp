<?php
$UserID = '' . htmlspecialchars($_GET["id"]) . '';
// copy file content into a string var
$json_file = file_get_contents('test.json');
// convert the string to a json object
$jfo = json_decode($json_file);
// read the title value
$email = $jfo->Email;

print $jfo->{'Email'};

//$item['assets']['RAM']

print $email;

print $jfo['Email'];

print $UserID;
?>
v4