<?php

namespace Pasha\Mvcproject\Http\Enums;

enum RequestMethods: string
{
    case GET = "GET";
    case POST = "POST";
    case PUT = "PUT";
    case DELETE = "DELETE";
    case PATCH = "PATCH";
}