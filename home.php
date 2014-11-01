<?php
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 绑定Home模块到当前入口文件------在url中不写模块的名称则默认为Home
define('BIND_MODULE','Home');

// 绑定Index控制器到当前入口文件----在URL中不写控制器的名称则默认为Index
define('BIND_CONTROLLER','Index');

define('APP_PATH','./Application/');


require './Think/ThinkPHP.php';