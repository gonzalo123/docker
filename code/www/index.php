<?php
include __DIR__ . '/../vendor/autoload.php';

use Silex\Application;

$app = new Application(['debug' => getenv('X_DEBUG') == 1 ? true : false]);

$app->get("/", function () {
    return "Hello";
});

$app->get("/api/hello", function (Application $app) {
    return $app->json([1, 2, 3]);
});

$app->run();