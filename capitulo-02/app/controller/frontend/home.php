<?php

// ...

$app->get('/', function () use ($app) {
    $app->render('frontend/home/index.html.twig');
})->name('home.index');

// ...