<?php
include __DIR__ . '/../vendor/autoload.php';

use Silex\Application;

$app = new Application(['debug' => getenv('X_DEBUG') == 1 ? true : false]);

$app->get("/", function () {
    $content = file_get_contents("http://node:8080/");

    return "Hello world from php. " . $content;
});

$app->get("/api/hello", function (Application $app) {
    return $app->json([1, 2, 3]);
});

$app->run();