<?php

namespace app\lib\exception;

use think\exception\Handle;
use Exception;
use think\Request;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;

    public function render(Exception $e)
    {
        if ($e instanceof BaseException)
        {
            //如果是自定义的异常
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        }
        else
        {
            $this->code = 500;
            $this->msg = "服务器内部错误，不想告诉你";
            $this->errorCode = 999;
        }

        $request = Request::instance();
        $result = [
            'msg' => $this->msg,
            'error_code' => $this->errorCode,
            'request_url' =>$request->url
        ];

        return json($result,$this->code);
    }
}