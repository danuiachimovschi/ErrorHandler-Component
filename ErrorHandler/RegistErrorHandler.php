<?php

declare(strict_types=1);

namespace ErrorHandler;

class RegistErrorHandler
{
    public function setHandler(): void
    {
        set_error_handler([$this, 'handleError']);
    }
}