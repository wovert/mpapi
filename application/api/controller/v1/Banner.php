<?php

namespace app\api\controller\v1;

use think\Validate;
use app\api\validate\IdMustBePositiveInt;

class Banner 
{
  /**
   * 获取指定id的banner信息
   * @url /banner/:id
   * @http GET
   * @id 横幅编号
   */
  public function getBanner($id)
  {

    $data = [
      'id' => $id
    ];

    // $validate = new Validate([
    //   'name' => 'require|max:10',
    //   'email'=> 'email'
    // ]);

    // // 执行验证
    // $result = $validate->check($data);
    // // 仅返回第一个字段错误的验证错误信息
    // echo $validate->getError();

    // // 执行验证
    // $result = $validate->batch()->check($data);

    // // Array ( [name] => name长度不能超过 10 [email] => email格式不符 )
    // print_r($validate->getError());

    (new IdMustBePositiveInt())->checkParams();
    echo 111;
    //var_dump($validate->getError());

  }
}