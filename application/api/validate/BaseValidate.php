<?php

namespace app\api\validate;

use think\Validate;
use think\Request;
use think\Exception;

class BaseValidate extends Validate
{
  public function checkParams() {
    // 获取http传入的参数
    // 对这些参数做检验
    $req = Request::instance();
    $params = $req->param();
    
    // $result = $this->check($params);
    $result = $this->check($params);
    if (!$result) {
      $err = $this->error;
      throw new Exception($err);
    } else {
      return true;
    }
  }
}