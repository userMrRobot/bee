<?php



$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    //    Hendler[0]  Hendler[1]
    $r->addRoute('GET', '/', ['classes\HomeController', 'home']);
    $r->addRoute('POST', '/', ['classes\HomeController', 'homePost']);
    $r->addRoute('GET', '/users/{idz:\d+}', ['classes\HomeController', 'index']);
    // {id} must be a number (\d+)
    $r->addRoute('GET', '/user/{id:\d+}', 'get_user_handler');
    // The /{title} suffix is optional
    $r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo '404 page Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        echo '405 Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        $controller = new $handler[0];

        call_user_func([$controller, $handler[1]], $vars);

        break;
}