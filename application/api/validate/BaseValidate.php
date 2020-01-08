<?php

namespace app\api\validate;

use Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        //获取http 传入的所有参数
        //对这些参数做校验
        $request = Request::instance();
        $params = $request->param();

        $result = $this->check($params);
        if(!$result)
        {
            $error = $this->error;
            throw new Exception($error);
        }
        else
        {
            echo "hello world";
            return true;
        }
    }
}