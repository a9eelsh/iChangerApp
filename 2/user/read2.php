<?php
$array = json_decode('{"id":1,"name":"foo","email":"foo@test.com"}', true);
$url = htmlspecialchars($_GET['id']);
$JSON = file_get_contents($url);
$userarray = json_decode(''.$url.'', true);
//$array['id'] == 1
//$array['name'] == "foo"
//$array['email'] == "foo@test.com"
print $array['id'];
echo "\n";
print $array['email'];
echo "\n";
print $userarray['UserID'];
echo "\n";
echo "v2";