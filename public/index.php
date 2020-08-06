<?php

session_start();

require_once('../system/Psr4Autoloader.php');

$loader = new Psr4Autoloader;
$loader->addNamespace('App', __DIR__ . '/../app');
$loader->addNamespace('System', __DIR__ . '/../system');
$loader->register();

$container = new System\Container;
error_reporting($container->errorMode());
$container->run();
