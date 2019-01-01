<?php

namespace app\api\validate;

use think\Validate;

class IdMustBePositiveInt extends BaseValidate
{
  protected $rule = [
    'id' => 'require|isPositiveInt'
  ];

  protected function isPositiveInt($value, $rule='', $data='', $field='')
  {
    if (is_numeric($value) && is_int($value+0) && ($value+0) > 0) {
      return true;
    }
    return $field.'必须是正整数';
  }
}