<?php

namespace app\sample\controller;

use think\Request;

class Test {
  public function index()
  {
    return 'Module: sample, controller: Test, action: index';
  }

  public function info($id, $name)
  {
    $id = isset($id)? $id : '空值';
    $name = isset($name)? $name : '姓名为空';
    return '<h1>hello, id='.$id.', name='.$name.'</h1>';
  }

  // 动态路由，接受参数
  public function hello($id, $name)
  {
    $id = isset($id)? $id : '空值';
    $name = isset($name)? $name : '姓名为空';
    return '<h1>hello, id='.$id.', name='.$name.'</h1>';
  }

  public function hi()
  {
    $id = Request::instance()->param('id');
    $name = Request::instance()->param('name');

    $id = isset($id)? $id : '空值';
    $name = isset($name)? $name : '姓名为空';
    return '<h1>hello, id='.$id.', name='.$name.'</h1>';
  }

  public function allparam()
  {
    $all = Request::instance()->param();
    $id = isset($all['id'])? $all['id'] : '空值';
    $name = isset($all['name'])? $all['name'] : '姓名为空';
    return '<h1>hello, id='.$id.', name='.$name.'</h1>';
  } 
  
  public function allparams()
  {
    $getAll = Request::instance()->get();
    $routeAll = Request::instance()->route();
    $postAll = Request::instance()->post();

    echo 'get:';
    print_r($getAll);
    
    echo "\n route:";
    print_r($routeAll);
    
    echo "\npost:";
    print_r($postAll);

  } 

  public function input()
  {
    $all = input('param.');
    print_r($all);

    echo input('param.id') . '<br />';
    echo input('param.name') . '<br />';
    echo input('param.age') . '<br /><hr />';

    echo input('get.age') . '<br />';
  }
  
  // 依赖注入
  public function inject(Request $req)
  {
    $all = $req->param();
    print_r($all);
  }  
}
?>