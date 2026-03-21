<?php

spl_autoload_register(function ($class) {

    $baseDir = __DIR__ . '/App/';

    $class = str_replace('App\\', '', $class);

    $file = $baseDir . str_replace('\\', '/', $class) . '.php';

    if (file_exists($file)) {
        require $file;
    }

});