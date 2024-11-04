<?php

namespace classes;

class Router
{
public $routes = [];
protected $uri;
protected $method;

    public function __construct(){
        $this->uri = trim( parse_url($_SERVER['REQUEST_URI'])['path'], '/' );
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    public function only($middleweare)
    {
        $this->routes[array_key_last($this->routes)]['middleweare'] = $middleweare;
        return $this;
}

    public function add($uri, $controller, $method)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleweare' => null,
    ];
        return $this;
}

    public function match()
    {
        dump($this->uri);
        dump($this->method);
        $matches = false;
        foreach ($this->routes as $route) {
            if (($route['uri'] == $this->uri) and ($route['method'] == strtoupper($this->method))) {

                require CONTROLLERS . "/{$route['controller']}";
                $matches = true;
                break;

            }
        }
        if(!$matches){
            echo 'мы не подключились';
            if(!empty($_SESSION['user'])){ require VIEWS . "/errors/login404.php";}
            else require VIEWS . "/errors/Logout404.php";

        }
}


    public function get ($uri, $controller)
    {
        return $this->add($uri, $controller, 'GET');
    }
    public function post ($uri, $controller)
    {
        return $this->add($uri, $controller, 'POST');
    }
    public function delete ($uri, $controller)
    {
        return $this->add($uri, $controller, 'DELETE');
    }




















}