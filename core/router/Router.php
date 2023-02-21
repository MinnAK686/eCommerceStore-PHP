<?php

interface RouterInterface {
    public static function get($uri,$controller);
    public static function post($uri,$controller);
    public function direct($uri,$method);
    public function callAction($class,$method);
}

abstract class Router implements RouterInterface {
    protected static $routes = [
        "GET" => [],
        "POST" => []
    ];

    public function __construct(string $routes)
    {
        require "$routes.php";
    }

    public static function get($uri, $controller)
    {
        self::$routes["GET"][$uri] = $controller;
    }
    public static function post($uri, $controller)
    {
        self::$routes["POST"][$uri] = $controller;
    }

    public function direct($uri, $method)
    {
        if(!array_key_exists($uri,self::$routes[$method])) {
            die("<h1><center>404 Page Not Found</center></h1>");
        }
        $explodeRoute = self::$routes[$method][$uri];
        $this->callAction($explodeRoute[0],$explodeRoute[1]);
    }
    public function callAction($class, $method)
    {
        return $class::$method();
    }

}

// Route::get("uri", [Controller::class, "method"]);