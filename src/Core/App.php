<?php

namespace Pasha\Mvcproject\Core;

use Pasha\Mvcproject\Http\Request;

class App {
    private static string $basePath;
    private Request $request;

    public function __construct() {
        static::init();
    }

    public function build(): void
    {
        $this->request = new Request();

        $this->request->resolveRouting();
    }

    public function getRequest(): Request
    {
        return $this->request;
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
        return static::$basePath . DIRECTORY_SEPARATOR . 'routes.php';

    }

    public static function getViewPath(): string {
        return static::$basePath . DIRECTORY_SEPARATOR . 'views';

    }
}