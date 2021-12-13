<?php
// Bootstrap's Bootstraps
//const ROOT_DIR = __DIR__;

ini_set('display_errors', 'off');
error_reporting(E_ALL);

// Require the auto-loader
require __DIR__ . '/vendor/autoload.php';

use Groundwork\Server;

// Start the handle server
$server = Server::getInstance(__DIR__);

// Handle the request
$server->handle();
