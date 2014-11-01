<?php


// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义运行时目录
//define('RUNTIME_PATH','./Runtime/');

//安全文件的名称的设置
//define('DIR_SECURE_FILENAME', 'default.html');

//关闭目录安全文件的生成
//define('BUILD_DIR_SECURE', false);

//重新定义 应用公共模块目录的位置
//define('COMMON_PATH','./Common/');




// 定义应用目录
define('APP_PATH','./Application/');

// 引入ThinkPHP入口文件
require './Think/ThinkPHP.php';
