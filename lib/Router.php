<?php

class Router {

    private static $routes = [];

    private function __construct() {}

    public static function add($route, $controller, $method) {
        static::$routes[$route] = ["controller" => $controller, "method" => $method];
    }

    public static function getAction($route) {
        if (array_key_exists($route, static::$routes)) {
            return static::$routes[$route];
        } else {
            throw new Exception("The route '$route' was not found");
        }
    }

}
