<?php

use app\core\Application;

require_once __DIR__.'/vendor/autoload.php';


$app = new Application;
$app->router->get('/', function (){
     return 'Hello world';
});
$app->router->get('/user', function (){
    return 'Hello world from user';
});
$app->run();

