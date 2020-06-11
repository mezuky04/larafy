<?php

namespace Rennokki\Larafy\Exceptions;

class TooManyRequestsException extends \Exception
{
    protected $retryAfter;

    public function __construct($message = null, $retryAfter = 0, $code = 0, \EXception $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->retryAfter = $retryAfter;
    }

    public function getRetryAfter()
    {
        return $this->retryAfter;
    }
}
