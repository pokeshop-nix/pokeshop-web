<?php

namespace  Framework\Exceptions;

use Exception;

class NotFoundException extends Exception
{
    protected string $message;

    public function __construct(string $message)
    {
        $this->message = $message;
        parent::__construct();
    }

    public function __toString()
    {
        return '<b>An error has occured:</b> ' . $this->message;
    }
}
