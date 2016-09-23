<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    // 生成运行时目录
    '__dir__'  => ['runtime/cache', 'runtime/log', 'runtime/temp', 'runtime/template'],
    // 生成应用公共文件
    '__file__' => ['common.php', 'config.php', 'database.php'],
    // 定义index模块的自动生成
    'index'    => [
        '__file__'   => ['common.php','command.php'],
        '__dir__'    => ['behavior', 'controller', 'model'],
        'controller' => ['Index', 'Test', 'UserType'],
        'model'      => [],
//        'view'       => ['index/index'],
    ],

    // 定义index模块的自动生成
    'admin'    => [
        '__file__'   => ['common.php','command.php'],
        '__dir__'    => ['behavior', 'controller', 'model','view'],
        'controller' => ['Index', 'User'],
        'model'      => [],
        'view'       => ['user/index'],
    ],

    //定义api模块的自动生成
    'api'      => [
        'controller' => ['Error'],
    ]

    // 。。。 其他更多的模块定义
];
