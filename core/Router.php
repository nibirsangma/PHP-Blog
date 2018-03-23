<?php


class Router {
    public $routes = [
        'GET' => [],
        'POST'=> []
    ];

    public function get($uri, $controller){
        $this->routes['GET'][$uri] = $controller;
    }
    public function post($uri, $controller){
        $this->routes['POST'][$uri] = $controller;
    }

    public static function load($file){
        $router = new static;
        require $file;
        return $router;
    }

    protected function callMethod($class, $method){
        $conObject = new $class;
        if (! method_exists($conObject, $method)) {
            throw new Exception("this method {$method} is not defined");
        }
        return $conObject->{$method}();
    }


    public function direct($uri, $requestType)
    {
        if (array_key_exists( $uri, $this->routes[$requestType])){
            return $this->callMethod(
              ...explode('@', $this->routes[$requestType][$uri])
            );
        }
        throw new Exception("Error Processing Request Routes not defined {$uri}", 1 );
    }

}