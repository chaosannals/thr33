<?php namespace Thr33;

use Dotenv\Dotenv;

/**
 * 
 */
abstract class Main {
    private static $root;
    private static $env;

    /**
     * 
     */
    private static function init() {
        self::$root = realpath('./');
        self::$env = Dotenv::create(self::$root);
        self::$env->overload();
    }

    /**
     * 
     */
    public static function run() {
        self::init();
        if (isset($_ENV['APP_DEBUG'])) {
            define('APP_DEBUG', 'true' === $_ENV['APP_DEBUG']);
        }
        if (isset($_ENV['APP_PATH'])) {
            define('APP_PATH', self::$root.'/'.$_ENV['APP_PATH'].'/');
        }
        require APP_PATH.'/../ThinkPHP/Thr33.php';
    }
}