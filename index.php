<?php

$latitude = 59.4370;
$longitude = 24.7536;

$url = "https://api.met.no/weatherapi/locationforecast/2.0/compact?lat=$latitude&lon=$longitude";

$options = [
    "http" => [
        "header" => "User-Agent: TallinnWeatherExercise/1.0\r\n"
    ]
];

$context = stream_context_create($options);

$response = file_get_contents($url, false, $context);

$data = json_decode($response, true);

echo $data["properties"]["timeseries"][0]["time"] . " " .
     $data["properties"]["timeseries"][0]["data"]["instant"]["details"]["air_temperature"] . "C";