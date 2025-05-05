<?php 

namespace Core;

class Router {
    protected $routes = [];

    public function get($uri, $controllerAction) {
        $this->routes['GET'][$uri] = $controllerAction;
    }



    public function resolve($uri, $method) {
        if (isset($this->routes[$method][$uri])) {
            return $this->routes[$method][$uri];
        }
        return null;
    }
}
