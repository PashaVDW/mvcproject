<?php

// The Request class is responsible for encapsulating the incoming HTTP request made by the client (e.g., a web browser)
// and providing a convenient interface to access its various components.
// It parses the request headers, URL parameters, form data, cookies, and any other relevant information from the request.
// This class is designed to abstract away the details of the HTTP protocol, making it easier to work with request data in the application.
// The Request class may offer methods like getMethod() to retrieve the HTTP method used (e.g., GET, POST), getPath() to obtain the requested URL path,
// getQueryParams() to fetch query parameters, and so on. These methods allow the controller to access and use the request data to determine the appropriate actions to take.

namespace Pasha\Mvcproject\Core;

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

    public function get($key, $default = null)
    {
        if(array_key_exists($key, $this->request)) {
            return $this->request[$key];
        } else {
            return $default;
        }
    }
}