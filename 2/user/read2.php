<?php
$content=file_get_contents("test.json");
$data=json_decode($content);
print $data['UserID'];
?>