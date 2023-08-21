<?php

// The Request class is responsible for encapsulating the incoming HTTP request made by the client (e.g., a web browser)
// and providing a convenient interface to access its various components.
// It parses the request headers, URL parameters, form data, cookies, and any other relevant information from the request.
// This class is designed to abstract away the details of the HTTP protocol, making it easier to work with request data in the application.
// The Request class may offer methods like getMethod() to retrieve the HTTP method used (e.g., GET, POST), getPath() to obtain the requested URL path,
// getQueryParams() to fetch query parameters, and so on. These methods allow the controller to access and use the request data to determine the appropriate actions to take.

namespace Pasha\Mvcproject\Http;

use Pasha\Mvcproject\Core\App;

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

    public function resolveRouting()
    {
        require_once routes_path();

        dd(Router::getRoutes());
    }

    // Probeer niet de functie niet get te noemen maar meer iets algemeens
    // Vang daarna alle routes op (Router::getRoutes()) en filter de routes door de $_SERVER['REQUEST_METHOD'] en uiteraard door de url
    // Probeer daarna de functie te zoeken in de class die allemaal in de route zouden moeten zitten etc etc
    public function get(string $key, string $default = null)
    {
        if(array_key_exists($key, $this->request)) {
            return $this->request[$key];
        } else {
            return $default;
        }
    }
}