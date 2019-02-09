<?php

use App\Core\Route;

Route::addRoute('/', function () {
    echo 'This is the index.';
});

Route::addRoute('/function', function () {
    echo "I routed '/function'. Its handler is a function.";
});

Route::addRoute('/controller', 'Example@helloWorld');

Route::addRoute('/invalid-controller', 'Fake\\Example@method');

Route::addRoute('/invalid-method', 'Example@invalid');

Route::addRoute('/{lang}/addRoute', function () {
    $arg = func_get_arg(0);
    echo 'You requested the language: ' . $arg['lang'];
});

Route::addRoute('/controller-args/{myName}/{myAge}', 'Example@showArgs');