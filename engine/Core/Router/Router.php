<?php

namespace Engine\Core\Router;

class Router
{
    private $routes = [];
    private $host;
    
    /**
     * Router constructor.
     * @param $host
     */
    
    public function __construct($host)
    {
        $this->host = $host;
    }
    
    /**
     * @param $key
     * @param $pattern
     * @param $controller
     * @param string $method
     */
    
    public function add($key, $pattern, $controller, $method = 'GET')
    {
        $this->routes[$key] = [
            'pattern'    => $pattern,
            'controller' => $controller,
            'method'     => $method
        ];
    }
    
    public function dispatch($method, $uri)
    {
        
    }
    
    public function getDispatcher()
    {
        
    }
}
