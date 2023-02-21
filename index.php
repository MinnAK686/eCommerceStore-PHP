<?php

declare(strict_types = 1);
ini_set("display_errors", 1);
error_reporting(E_ALL);
ob_start();

require "vendor/autoload.php";
require "core/bootstrap.php";

$router = new Route("Routes");
$router->direct(Request::URI(),Request::Method());

