<?php

namespace Single;

use Phalcon\Loader;

#  constant

define('PUBLIC_ROOT',__DIR__);


# autoload
$loader = new Loader();
$loader->registerNamespaces(
    [
        'app' => '../app/'
    ]
);
$loader->register();

try {
    $application = new \app\Application();
    $application->start();
} catch (\Exception $e) {
    echo $e->getMessage();
}
