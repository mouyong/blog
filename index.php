<?php
    header('Content-type:text/html;charset=utf-8');
    //定义应用名称Home
    define('APP_NAME','Home');
    //定义应用路径
    define('APP_PATH','./Home/');
    //生成Admin分组
    //define('BIND_MODULE','Admin');
    //开启调试模式
    define('APP_DEBUG',true);
    //关闭安全模式
    define('BUILD_DIR_SECURE', false);
    //引入核心文件
    require './ThinkPHP/ThinkPHP.php';
