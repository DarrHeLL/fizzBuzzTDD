<?php

namespace App\FizzBuzz;

use Exception;
use Throwable;

class FizzBuzzException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString(): string
    {
        return $this->message;
    }
}
