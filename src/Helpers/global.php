<?php

use Pasha\Mvcproject\Core\App;

if (!function_exists("app"))
{
    function app()
    {
        return new App();
    }
}

if (!function_exists("config"))
{
    function config(string $key)
    {
        //
    }
}

if (!function_exists('dd'))
{
    function dd(...$args)
    {
        var_dump(...$args);
        die();
    }
}

if (!function_exists('dump'))
{
    function dump(...$args)
    {
        var_dump(...$args);
    }
}

if (!function_exists('root_path'))
{
    /**
     * Get the root path
     *
     * @return string path
     */
    function root_path()
    {
        return App::getRootPath();
    }
}

if (!function_exists('view_path'))
{
    /**
     * Get the view path
     *
     * @return string path
     */
    function view_path(): string
    {
        return App::getViewPath();
    }
}

if (!function_exists('view'))
{
    function view($file)
    {
        if (! file_exists(view_path() . "/" . $file))
        {
            throw new \RuntimeException(sprintf('View [%s] does not exist in [%s]', $file, view_path()));
        }
        return include_once(view_path() . "/" . $file);
    }
}

if (!function_exists('config_path'))
{
    /**
     * Get the config path
     *
     * @return string path
     */
    function config_path()
    {
        return App::getConfigPath();
    }
}

if (!function_exists('routes_path'))
{
    /**
     * Get the routes path
     *
     * @return string path
     */
    function routes_path()
    {
        return App::getRoutesPath();
    }
}

if (!function_exists('abort'))
{
    /**
     * @param int $code
     *
     */
    function abort(int $code = 404)
    {
        http_response_code($code);
        die();
    }
}