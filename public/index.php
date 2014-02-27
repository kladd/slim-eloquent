<?php

require __DIR__.'/../vendor/autoload.php';

$app = new Slim\Slim();

$app->get('/', function() {
    $user = new User;
    $user->username = "Test User";
    // $user->save();

    echo "Hello, $user->username!";
});

$app->run();
