<?php

use App\Controllers\IndexController;

/** @var AltoRouter $router */

/**
 * This file maps all known routes.
 * 
 * Routes can be mapped with the `$router->map()` method.
 * 
 * Routes consist out of four part;
 *      1. The METHOD. This can be a single method (GET) or a combination (GET|POST|PUT)
 *      2. The PATH. This can be static paths '/contact' or one with parameters '/gallery/[i:id]' 
 *         where in before the `:` there's the type and after is the name.
 *      3. The CONTROLLER. Such as IndexController::class. This can also be an array, where the 
 *         second item is the method to call.
 *      4. The NAME. This is used to generate a route (by using the `route()` method). It is 
 *         optional ONLY if the route will never get targeted by a 'route' call.
 */


$router->map('GET', '/', [IndexController::class, 'index'], 'index');

$router->map('GET', '/test', [IndexController::class, 'test'], 'test');

$router->map('POST', '/test', [IndexController::class, 'testPost'], 'postTest');
