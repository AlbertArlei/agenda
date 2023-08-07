<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Router
{
    private $routes = [];

    public function addRoute($method, $path, $callback)
    {
        $this->routes[$method][$path] = $callback;
    }

    public function run($method, $uri)
    {
        if (!isset($this->routes[$method])) {
            http_response_code(405);
            echo "Método não permitido";
            return;
        }

        foreach ($this->routes[$method] as $path => $callback) {
            if ($uri === $path) {
                $callback();
                return;
            }
        }

        http_response_code(404);
        echo "Página não encontrada";
    }
}

$router = new Router();



$router->addRoute('GET', '/agenda/', function () {
    include('./controllers/homeController.php');
});

$router->addRoute('GET', '/agenda/login', function () {
    include('./controllers/loginController.php');
});

$router->addRoute('POST', '/agenda/agendamentocreate', function () {
    include('./models/formularioAgendamentoCreate.php');
});

$router->run($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);