<?php

namespace app\api\controller\v1;

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
    return [1,2,3];
  }
}