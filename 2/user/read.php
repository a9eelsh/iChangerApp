<?php
$UserID = '' . htmlspecialchars($_GET["id"]) . '';

$url = ''.$UserID.'.json';

$json = file_get_contents($url);

$object = json_decode($json);

$array = json_decode($json, TRUE);

echo $object->whatever;
?>
v5
<p>userid <?php print $UserID; ?></p>
<p>url <?php print $url; ?></p>
<p>json <?php print $json; ?></p>
<p>object <?php print $object; ?></p>
<p>array <?php print $array; ?></p>