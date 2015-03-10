<?php
// load the document
$nusername = htmlspecialchars($_GET['nusername']);
// the root node is <info/> so we load it into $info
$xml = simplexml_load_file('test.xml');

// update
$username = $xml->username = $nusername;

// save the updated document
$xml->asXML('test.xml');
echo "UserID: $UserID<br/>username: $username";