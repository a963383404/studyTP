<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        /*$view = new \think\View(['view_path' => ROOT_PATH.'template/default/']);
        return $view->fetch('index');*/
       return $this->fetch("index");
    }
}
