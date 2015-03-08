<?php
$array = json_decode('{"id":1,"name":"foo","email":"foo@test.com"}', true);
//$array['id'] == 1
//$array['name'] == "foo"
//$array['email'] == "foo@test.com"
print $array['id'];
print $array['email'];