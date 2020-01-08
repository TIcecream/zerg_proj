<?php

namespace app\api\controller\v1;

use app\api\validate\IDMustBePositiveInt;
use app\api\validate\TestValidate;
use think\Validate;

class Banner
{
    /**
     * 获取指定id的banner信息
     *@url  /banner/:id
     *http GET
     * @param banner id 的 id号$id
     * @return void
     */
    public function getBanner($id)
    {
        //独立验证
        //验证器
        $data = [
            'id' => $id
        ];

        (new IDMustBePositiveInt())->goCheck();

        // // $validate = new Validate([
        // //     'name' => 'require|max:10',
        // //     'email' => 'email'
        // // ]);

        // $validate = new IDMustBePositiveInt();
        // $result = $validate->batch()->check($data);
        // var_dump($validate->getError());
    
        return $id;
    }
}