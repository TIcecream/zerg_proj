<?php

namespace app\lib\exception;

use Exception;

class BaseException extends Exception
{
    // HTTP 状态码
    public $code = 400;
    public $msg = 'para error';
    public $errorCode = 10000;
}