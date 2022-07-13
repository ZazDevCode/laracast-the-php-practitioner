<?php

/*** User: Sascha Wernars */

/**
 *
 * @author Sascha Wernars <s@scha.nl>
 */

class Router{
protected $routes = [];

    public static function load($file)
    {
        $routes = new static; // same as new Router;
        require $file;
        return $routes;
    }

    public function define($routes){
        $this->routes = $routes;
    }

    public function direct($uri){
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }
        throw new Exception('No route defined for this URI');
    }    
}