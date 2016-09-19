<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 开启调试模式
define('APP_DEBUG',true);
//开启自动创建
define("APP_AUTO_BUILD",true);
// 定义应用目录
define('APP_PATH', __DIR__ . '/application/');

// 加载框架引导文件
require __DIR__ . '/thinkphp/start.php';

//执行应用
\think\App::run();
/*// 读取自动生成定义文件
$build = include 'build.php';
// 运行自动生成
\think\Build::run($build,'application',true);*/