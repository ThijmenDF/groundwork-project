<?php
// Bootstrap's Bootstraps
//const ROOT_DIR = __DIR__;

ini_set('display_errors', 'off');
error_reporting(E_ALL);

// Require the auto-loader
require './vendor/autoload.php';

use Groundwork\Server;

// Start the handle server
$server = Server::getInstance();

// Handle the request
$server->handle();