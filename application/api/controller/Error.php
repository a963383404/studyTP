<?php
namespace app\api\controller;

use think\controller\Rest;

class Error extends Rest{
    protected $restTypeList      = 'json';
    protected $restDefaultType   = 'json';
    protected $otherResource = ['plc','config']; //?��ʲô��
    protected $restOutputType    = [ // REST�����������Դ�����б�
        'json' => 'application/json',
    ];
    protected $resource_name = '';//?��ʲô��

    public function _empty($name) {
        $table = $this->resource_name = strtolower(request()->controller());
        //�鿴�ñ��Ƿ����
        if ( in_array($table,$this->otherResource) ) {
            $this->$table($name);
        } else {
            //�Ƿ���ڸ����ݱ�
            $querySql = "show tables like '".config('database.prefix')."_{$table}'";
            if ( db()->query($querySql) ) {

            } else {
                $message = "��ѯ��Դ".$this->resource_name."�����ڣ�";
                //���������ı���Malformed UTF-8 characters, possibly incorrectly encoded
                return response(['code'=>'404','message'=>"888888888"],$this->restDefaultType,'404');
            }

        }
    }
}