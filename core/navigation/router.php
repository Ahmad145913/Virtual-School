<?php
class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => [],
    ];
    public static function load($file): Router
    {
        $router = new static;
        require $file;
        return $router;
    }

    public static function directToHomePage()
    {
        header('Location: /');
        die;
    }
    public function direct(string $uri, string $requestMethodType = 'GET')
    {
        $routeExists = array_key_exists($uri, $this->routes[$requestMethodType]);
        if ($routeExists) {
            return $this->routes[$requestMethodType][$uri];
        }
    }
    function get($route, $path_to_include)
    {
        if (
            $_SERVER['REQUEST_METHOD'] == 'GET'
        ) {
            $this->routes['GET'][$route] = $path_to_include;
        }
    }
    function post($route, $path_to_include)
    {
        if (
            $_SERVER['REQUEST_METHOD'] == 'POST'
        ) {
            $this->routes['POST'][$route] = $path_to_include;
        }
    }
}