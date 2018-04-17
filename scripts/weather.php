<?php
$jsonfile = file_get_contents("http://api.openweathermap.org/data/2.5/weather?id=4612862&units=imperial&appid=YOUR-API-KEY");
$jsondata = json_decode($jsonfile);
$temp = floor($jsondata->main->temp);
$pressure = $jsondata->main->pressure;
$mintemp = $jsondata->main->temp_min;
$maxtemp = $jsondata->main->temp_max;
$wind = $jsondata->wind->speed;
$humidity = $jsondata->main->humidity;
$desc = $jsondata->weather[0]->description;
$maind = $jsondata->weather[0]->main;
?>
