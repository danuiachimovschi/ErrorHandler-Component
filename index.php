<?php

use ErrorHandler\ErrorHandler;
use ErrorHandler\RegistErrorHandler;

require_once __DIR__ . '/vendor/autoload.php';

$errorHandler = new ErrorHandler();
$errorHandler->setHandler();


