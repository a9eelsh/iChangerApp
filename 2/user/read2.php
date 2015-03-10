<?php
$variable = file_get_contents('http://ichangerapp.com/user/test.json');
$decoded = json_decode($variable);
print $variable;
print $decoded;
?>
1