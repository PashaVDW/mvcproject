<?php

use Pasha\Mvcproject\Core\App;

if(! function_exists("config")) {
    function config(string $key) {
        //
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
    function view_path()
    {
        return App::getViewPath();
    }
}

if (!function_exists('view'))
{
    /**
     * require the view component
     *
     * @return \Visionv2\Core\App
     */
    function view($view, $attributes = [])
    {
        return App::makeView($view, $attributes);
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

//if (!function_exists('env'))
//{
//    /**
//     * Get a env value
//     *
//     * @param string item
//     * @return string env
//     */
//    function env(string $item)
//    {
//        return \Visionv2\Config\Handler::getEnv($item);
//    }
//}