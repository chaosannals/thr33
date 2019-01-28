<?php namespace Thr33;

use Dotenv\Dotenv;

/**
 * 管理类。
 * 
 */
abstract class Main {
    private static $root;
    private static $env;

    /**
     * 初始化。
     * 
     */
    private static function init() {
        self::$root = realpath('./');
        self::$env = Dotenv::create(self::$root);
        self::$env->overload();
    }

    /**
     * 运行。
     * 
     */
    public static function run() {
        self::init();
        if (isset($_ENV['APP_DEBUG'])) {
            define('APP_DEBUG', 0 === strcasecmp('true',$_ENV['APP_DEBUG']));
        }
        if (isset($_ENV['APP_PATH'])) {
            define('APP_PATH', self::$root.'/'.$_ENV['APP_PATH'].'/');
        }
        require self::$root.'/ThinkPHP/Thr33.php';
    }
}