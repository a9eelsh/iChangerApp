<?php
// load data
$UserID = '' . htmlspecialchars($_GET["id"]) . '';

$url = ''.$UserID.'.json';

$json = file_get_contents($url);

$object = json_decode($json);

$array = json_decode($json, true);

// pull data

$value1 = $object->Email;
$value2 = $object['Email'];

$value3 = $array->Email;
$value4 = $array['Email'];

$value5 = $json->Email;
?>
v8
<p>LOAD DATA</p>
<p>userid <?php print $UserID; ?></p>
<p>url <?php print $url; ?></p>
<p>json <?php print $json; ?></p>
<p>object <?php print $object; ?></p>
<p>array <?php print $array; ?></p>
<p>PULL DATA</p>
<p>value1 <?php print $value1; ?></p>
<p>value2 <?php print $value2; ?></p>
<p>value3 <?php print $value3; ?></p>
<p>value4 <?php print $value4; ?></p>
<p>value5 <?php print $value5; ?></p>
<p>value6 <?php print $value6; ?></p>