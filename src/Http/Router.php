<?php

// The Router.php file contains the actual router class responsible for processing incoming requests and directing them to the appropriate controller and action.
// This class typically handles the URL parsing, route matching, and invoking the corresponding controller and action based on the matched route.
// The Router.php class would have methods to define routes, such as get(), post(), put(), delete(), etc.
// These methods allow you to specify the URL pattern, the corresponding controller and action, and potentially other middleware or parameters.

namespace Pasha\Mvcproject\Http;

class Router {
    /**
     * @var mixed|array
     */
    protected static array $routes = [];

    public function __construct($routes = []) {
        return static::$routes = $routes;
    }

    public function get($uri, $controller) {
        static::$routes[] = [
          'uri' => $uri,
          'controller' => $controller,
          'method' => 'GET'
        ];
    }

    public function route($uri, $method) {
        foreach (static::$routes as $route) {
            if ($route['uri'] === $uri) {
                return root_path($route['controller']);
            }
        }
        abort(404);
    }

    public function getRoutes() {
        return static::$routes;
    }
}
