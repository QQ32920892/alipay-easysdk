<?php

namespace Supen\Alipay\Exceptions;

use Exception;

class RuntimeException extends Exception
{
    function __construct($message = "", $code = 0, $previous = NULL)
    {
        parent::__construct($message, $code, $previous);
    }
}
