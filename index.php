<?php
require_once __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Response;

$api_key = getenv ('OPEN_WEATHER_API');

$app = new Silex\Application();

$app->get('/clima', function() use($app,$api_key) {
                
        $client = new client();
        $url = "http://api.openweathermap.org/data/2.5/weather?id=3530597&appid=ef42538a4eeebe4d2dc75034c3a0b20e&units=metric";
        
        $response = $client -> get ($url);
        $body = $response -> getBody ();

        return new Response ($body,200,array('Content-Type' => 'application/json'));
});

$app->run();
?>