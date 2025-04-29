<?php
require __DIR__ . '/../vendor/autoload.php';  // Include Composer autoload

// Load configuration
$config = require __DIR__ . '/../config/app.php';

// Initialize Router
$router = new \Core\Router();

// Define Routes (or load from a file)
require __DIR__ . '/../routes/web.php';

// Get the current URL
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Resolve the route and call the corresponding controller and method
$controllerAction = $router->resolve($uri, $_SERVER['REQUEST_METHOD']);
if ($controllerAction) {
    list($controller, $action) = explode('@', $controllerAction);
    $controllerInstance = new $controller();
    echo $controllerInstance->$action();
} else {
    echo '404 Not Found';
}
