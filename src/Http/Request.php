<?php

// The Request class is responsible for encapsulating the incoming HTTP request made by the client (e.g., a web browser)
// and providing a convenient interface to access its various components.
// It parses the request headers, URL parameters, form data, cookies, and any other relevant information from the request.
// This class is designed to abstract away the details of the HTTP protocol, making it easier to work with request data in the application.
// The Request class may offer methods like getMethod() to retrieve the HTTP method used (e.g., GET, POST), getPath() to obtain the requested URL path,
// getQueryParams() to fetch query parameters, and so on. These methods allow the controller to access and use the request data to determine the appropriate actions to take.

namespace Pasha\Mvcproject\Http;

use App\Http\Controllers\HomeController;
use http\Exception\RuntimeException;
use Pasha\Mvcproject\Core\App;
use ReflectionMethod;

class Request
{
    protected $request;

    public function __construct() {
        $this->request = $_REQUEST;
    }

    public function all(): array
    {
        return $this->request;
    }

    /**
     * @throws \ReflectionException
     */
    public function resolveRouting()
    {

        require_once routes_path();

        $routes = Router::getRoutes();
        $uri = $this->getUri();

        if(isset($routes[$uri]))
        {
            $route = $routes[$uri];
            if(! class_exists($route['controller'])) {
                throw new RuntimeException(sprintf('Controller [%s] for route [%s] does not exits', $route['controller'], $route['uri']));
            }

            $obj = new $route['controller'];
            $method = new ReflectionMethod($obj, $route['method']);
            if($method->getNumberOfParameters() < 1)
            {
                return $obj->{$route['method']}();
            }

            $parameters = [];
            foreach($method->getParameters() as $parameter)
            {
                if($parameter->getName() === 'request')
                {
                    $parameters[] = app()->getRequest();
                }
            }

            return call_user_func_array([$obj, $route['method']], $parameters);
        } else {
            abort(404);
        }
    }

    private function getUri()
    {
        if ($_SERVER['REQUEST_URI'])
        {
            $url = rtrim(strtolower($_SERVER['REQUEST_URI']), '/');
            // Filter de url van alles wat niet in een url thuishoort
            return filter_var($url, FILTER_SANITIZE_URL);
        }
    }
}