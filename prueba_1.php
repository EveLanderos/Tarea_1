<?php
 
require_once __DIR__.'/vendor/autoload.php';
 
$app = new Silex\Application();
 
$app->get('/clima', function() use ($app) {
$array = ['nombre' => 'Evelin Landeros', 'cuenta' => '090158238'];
 
return $app->escape(json_encode($array));
});
 
$app->run();
