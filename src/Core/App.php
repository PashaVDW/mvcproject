<?php

namespace Pasha\Mvcproject\Core;

class App {

    private static string $basePath;

    public function __construct() {
        static::init();
    }

    private static function init() {
        static::$basePath = dirname(dirname(dirname(dirname(dirname(__DIR__)))));
    }

    public static function getRootPath(): string {
        return static::$basePath;
    }

    public static function getConfigPath(): string {
        return static::$basePath . DIRECTORY_SEPARATOR . 'config';
    }

    public static function getRoutesPath(): string {
        return static::$basePath . DIRECTORY_SEPARATOR . 'routes';

    }

    public static function getViewPath(): string {
        return static::$basePath . DIRECTORY_SEPARATOR . 'views';

    }
}