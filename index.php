<?php
// 应用入口文件

// 检测PHP环境
if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    die('require PHP > 5.5.0 !');
}

// 记录开始运行时间
$GLOBALS['_beginTime'] = microtime(true);

// 加载 Composer 自动加载。
require __DIR__.'/Vendor/autoload.php';

// 运行
Thr33\Main::run();

// 亲^_^ 后面不需要任何代码了 就是如此简单
