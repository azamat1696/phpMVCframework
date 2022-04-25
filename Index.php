<?php

use app\core\Application;

$app = new Application();

$app->router->get('/', function (){
          return 'Hello World';
});
$app->router->get('/contacts',function (){
    return 'Contact World';
});


$app ->run();
