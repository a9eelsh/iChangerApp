<?php
$strjson1 = '{"url": "http://coursesweb.net/", "category": "Web Development","nr_pages": 400}';
$strjson = 'http://ichangerapp.com/user/test.json';
$objson = json_decode($strjson);
$url = $objson->url;
echo '<br/>'. $url;