<?php

declare(strict_types=1);

namespace ErrorHandler;

use Throwable;
use ErrorHandler\Interfaces\ErrorHandlerInterface;

class ErrorHandler extends RegistHandler implements ErrorHandlerInterface
{
    public function handleError(
        int $errno,
        string $errstr,
        string $errfile,
        int $errline
    ): bool
    {
        dump($errno, $errfile, $errstr, $errline);

        return true;
    }

    public function handleException(Throwable $exception): void
    {
        dump($exception);
    }

    public function setProductionMode(): void
    {
        set_error_handler(null);
        error_reporting(0);
    }
}