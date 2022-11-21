<?php

use ErrorHandler\ErrorHandler;

require_once __DIR__ . '/vendor/autoload.php';

$errorHandler = new ErrorHandler();
$errorHandler->setHandler();

include ("external_file.php");
// throw new Exception("Dsd");
