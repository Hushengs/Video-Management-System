<?php
//基于tp框架的影音管理系统开发

//定义项目的名称
define('APP_NAME','Video');

//定义项目的路径
define('APP_PATH','./Video/');

//默认加载Home前台模块
$_GET['m'] = 'Admin';

//引人ThinkPHP核心文件
require('./ThinkPHP/ThinkPHP.php');