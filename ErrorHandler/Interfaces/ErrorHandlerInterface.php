<?php

declare(strict_types=1);

namespace ErrorHandler\Interfaces;

interface ErrorHandlerInterface 
{
    public function handleError(
        int $errno,
        string $errstr,
        string $errfile,
        int $errline ,
    ): bool;

    public function setHandler(): void;
}