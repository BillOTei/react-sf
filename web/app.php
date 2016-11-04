<?php

use Symfony\Component\HttpFoundation\Request;

require __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../app/LightKernel.php';

$app = new LightApp\LightKernel($_SERVER["SYMFONY__APP__ENVIRONMENT"], $_SERVER["SYMFONY__APP__ENVIRONMENT"] === "dev");
$app->loadClassCache();

$app->handle(Request::createFromGlobals())->send();
