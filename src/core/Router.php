<?php

/*** User: Sascha Wernars */

/**
 *
 * @author Sascha Wernars <s@scha.nl>
 */

class Router{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static; // same as new Router;
        require $file;
        return $router;
    }

    public function get($uri, $controller){
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller){
        $this->routes['POST'][$uri] = $controller;
    }
    
    public function direct($uri, $requestType){
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }
        throw new Exception('No route defined for this URI');
    }    
}