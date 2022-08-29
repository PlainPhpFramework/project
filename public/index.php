<?php
/**
 * Set up and run the application
 */

// First setup the include path
$base = realpath(__dir__.'/..');
set_include_path(implode(PATH_SEPARATOR, [
    $base . '/app',
    $base . '/packages/plainphp/core-package',
]));

// Bootstrap the app
require 'inc/bootstrap.php';

// Dispatch to the controller 
require 'inc/dispatch.php';