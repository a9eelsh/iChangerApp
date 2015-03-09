<?php
$strjson = '{"url": "http://coursesweb.net/", "category": "Web Development","nr_pages": 400}';
$objson = json_decode($strjson);
$url = $objson->url;
echo '<br/>'. $url;