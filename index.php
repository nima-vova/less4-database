<?php
include "./vendor/autoload.php";
/*
$controllerName = isset($_GET['controller']) ;
$controllerName = ucfirst($controllerName) . 'Controller';
$controllerName = 'Controllers\\' . $controllerName;

$controller = new $controllerName($connector);
$actionName = isset($_GET['action']) ? $_GET['action'] : 'add';
$actionName = $actionName . 'Action';
$response = $controller->$actionName();
echo $response;


*/


use Colorium\Routing\Router;



//$controllerName = 'Controllers\\' . Controller;
//$controller = new Controller();



  /* echo "<a href='http://less4-database.com/test/createdb.php '>создать структура БД</a><br>";
   echo "<a >заполнить БД данными</a><br>";
   echo "<a >университеты</a><br>";
   echo "<a >кафедры</a><br>";
   echo "<a >студенты</a><br>";
   echo "<a >список дз</a><br>";
*/





echo "<a href='?create'>создать структура БД</a><br>";

if (isset($_GET['create'])) {

    $router = new Router;
    $router->add('GET /controller/:name', function($name)
    {
        echo 'Hello', $name, ' !';
    });

// search route
    $route = $router->find('GET /controller/createBD');

// if route not found
    if(!$route) {
        echo"404 error";
    }
    //echo $route->params['createBD'];

   // echo $route->uri;
    $controllerName = isset($_GET['controller']) ;
    $controllerName = ucfirst($controllerName) . 'Controller';
    $controllerName = 'Controllers\\' . $controllerName;

    $conntrollerAdd= new $controllerName();
    $createBD=$route->params['name'];
    $conntrollerAdd->$createBD();

}



echo "<a href='?add'>заполнить БД данными</a><br>";
if (isset($_GET['add'])) {

    $router1 = new Router;
    $router1->add('GET /controller/:name', function($name)
    {
        echo 'Hello', $name, ' !';
    });

// search route
    $route1 = $router1->find('GET /controller/addBD');

// if route not found
    if(!$route1) {
        echo"404 error";
    }
    //echo $route->params['createBD'];

    // echo $route->uri;
    $controllerName1 = isset($_GET['controller']) ;
    $controllerName1 = ucfirst($controllerName1) . 'Controller';
    $controllerName1 = 'Controllers\\' . $controllerName1;

    $conntrollerAdd1= new $controllerName1();
    $addBD=$route1->params['name'];
    $conntrollerAdd1->$addBD();

}