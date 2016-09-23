<?php
namespace app\api\controller;

use think\controller\Rest;

class Error extends Rest{
    protected $restTypeList      = 'json';
    protected $restDefaultType   = 'json';
    protected $otherResource = ['plc','config']; //?有什么用
    protected $restOutputType    = [ // REST允许输出的资源类型列表
        'json' => 'application/json',
    ];
    protected $resource_name = '';//?有什么用

    public function _empty($name) {
        $table = $this->resource_name = strtolower(request()->controller());
        //查看该表是否存在
        if ( in_array($table,$this->otherResource) ) {
            $this->$table($name);
        } else {
            //是否存在该数据表
            $querySql = "show tables like '".config('database.prefix')."_{$table}'";
            if ( db()->query($querySql) ) {

            } else {
                $message = "查询资源".$this->resource_name."不存在！";
                //？？？中文报错：Malformed UTF-8 characters, possibly incorrectly encoded
                return response(['code'=>'404','message'=>"888888888"],$this->restDefaultType,'404');
            }

        }
    }
}