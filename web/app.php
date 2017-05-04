<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;
require_once __DIR__.'/access_control.php';

umask(0002);

/**
 * @var Composer\Autoload\ClassLoader
 */
$loader = require __DIR__.'/../app/autoload.php';
include_once __DIR__.'/../var/bootstrap.php.cache';
require_once __DIR__.'/../app/AppKernel.php';

if (AccessControl::$debug) {
    Debug::enable();
}

$kernel = new AppKernel(AccessControl::$env, AccessControl::$debug);

if (AccessControl::$env != 'dev') {
    $kernel->loadClassCache();
}

//if (Settings::$env == 'prod') {
//    require_once __DIR__.'/../app/AppCache.php';
//    $kernel = new AppCache($kernel);
//    Request::enableHttpMethodParameterOverride();
//}

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
