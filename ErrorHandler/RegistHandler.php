<?php

declare(strict_types=1);

namespace ErrorHandler;

class RegistHandler
{
    public function setHandler(): void
    {
        error_reporting(0);
        set_error_handler([$this, 'handleError']);
        set_exception_handler([$this, 'handleException']);
    }
}