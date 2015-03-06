<?php
    $api_url = "test.json";
    $response = file_get_contents($api_url);
    $my_array = json_decode($response, true);   
    $my_array = json_decode($response);
    $my_array->places->place[0]->woe_name;