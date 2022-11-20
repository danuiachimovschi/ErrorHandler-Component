<?php

declare(strict_types=1);

namespace ErrorHandler;

use ErrorHandler\RegistErrorHandler;
use ErrorHandler\Interfaces\ErrorHandlerInterface;

class ErrorHandler extends RegistErrorHandler implements ErrorHandlerInterface
{
    public function handleError(
        int $errno,
        string $errstr,
        string $errfile,
        int $errline
    ): bool
    {
        var_dump($errno);

        return true;
    }
}