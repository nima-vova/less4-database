<?php

include './vendor/autoload.php';

use Colorium\Routing\Router;

$RoutingRoot= new \Controllers\RoutingRooles();
echo "<a href='?create'>создать структура БД</a><br>";
/*
if (isset($_GET['create'])) {
    $router = new Router();
    $router->add('GET /controller/:name', function ($name) {
        echo 'Hello', $name, ' !';
    });

// search route
    $route = $router->find('GET /controller/createBD');

// if route not found
    if (!$route) {
        echo'404 error';
    }
    //echo $route->params['createBD'];

   // echo $route->uri;
    $controllerName = isset($_GET['controller']);
    $controllerName = ucfirst($controllerName).'Controller';
    $controllerName = 'Controllers\\'.$controllerName;

    $conntrollerAdd = new $controllerName();
    $createBD = $route->params['name'];
    $conntrollerAdd->$createBD();


} */

echo "<a href='?add'>заполнить БД данными</a><br>";
/*if (isset($_GET['add'])) {
    $router1 = new Router();
    $router1->add('GET /controller/:name', function ($name) {
        echo 'Hello', $name, ' !';
    });

// search route
    $route1 = $router1->find('GET /controller/addBD');

// if route not found
    if (!$route1) {
        echo '404 error';
    }
    //echo $route->params['createBD'];

    // echo $route->uri;
    $controllerName1 = isset($_GET['controller']);
    $controllerName1 = ucfirst($controllerName1).'Controller';
    $controllerName1 = 'Controllers\\'.$controllerName1;

    $conntrollerAdd1 = new $controllerName1();
    $addBD = $route1->params['name'];
    $conntrollerAdd1->$addBD();
}
*/
    echo "<a href='?selectUnivers'>университеты</a><br>";
/*
    if (isset($_GET['selectUnivers'])) {
        $routerSelectUnivers = new Router();
        $routerSelectUnivers->add('GET /controller/:name', function ($name) {
            echo 'Hello', $name, ' !';
        });

// search route
        $routeSelectUnivers = $routerSelectUnivers->find('GET /controller/funcFrontSelectUnivers');

// if route not found
        if (!$routeSelectUnivers) {
            echo'404 error';
        }
        //echo $routeSelectUnivers->params['funcSelectUnivers'];

        // echo $routeSelectUnivers->uri;
        $controllerNameSelectUnivers = isset($_GET['controller']);
        $controllerNameSelectUnivers = ucfirst($controllerNameSelectUnivers).'Controller';
        $controllerNameSelectUnivers = 'Controllers\\'.$controllerNameSelectUnivers;

        $conntrollerAddSelectUnivers = new $controllerNameSelectUnivers();
        $funcFrontSelectUnivers = $routeSelectUnivers->params['name'];
        $conntrollerAddSelectUnivers->$funcFrontSelectUnivers();
    } */



/*if (@$_REQUEST['cheng']) {
    $controllerName = isset($_GET['controller']);
    $controllerName = ucfirst($controllerName).'Controller';
    $controllerName = 'Controllers\\'.$controllerName;

    $controller = new $controllerName($connector);
    //$actionName = isset($_GET['testGo']) ? $_GET['testGo'] : 'add';
    $actionName = 'testGo';
    $response = $controller->$actionName();
    echo $response;
} */

/*
if (@$_REQUEST['del']) {
    echo @$_REQUEST['del'];
    $controllerName = isset($_GET['controller']);
    $controllerName = ucfirst($controllerName).'Controller';
    $controllerName = 'Controllers\\'.$controllerName;

    $controller = new $controllerName($connector);
    //$actionName = isset($_GET['testGo']) ? $_GET['testGo'] : 'add';
    $actionName = 'delUniver';
    $response = $controller->$actionName();
    echo $response;
}

if (@$_REQUEST['addOne']) {
    echo @$_REQUEST['addOne'];
    $controllerName = isset($_GET['controller']);
    $controllerName = ucfirst($controllerName).'Controller';
    $controllerName = 'Controllers\\'.$controllerName;

    $controller = new $controllerName($connector);
    //$actionName = isset($_GET['testGo']) ? $_GET['testGo'] : 'add';
    $actionName = 'addOneUniver';
    $response = $controller->$actionName();
    echo $response;
}
*/

echo "<a href='?SelecCafedr'>кафедры</a><br>";
/*if (isset($_GET['SelecCafedr'])) {
    $routerSelecCafedr = new Router();
    $routerSelecCafedr->add('GET /controller/:name', function ($name) {
        echo 'Hello', $name, ' !';
    });

// search route
    $routeSelecCafedr = $routerSelecCafedr->find('GET /controller/funcFrontSelecCafedr');

// if route not found
    if (!$routeSelecCafedr) {
        echo '404 error';
    }
    //echo $route->params['createBD'];

    // echo $route->uri;
    $controllerNameSelecCafedr = isset($_GET['controller']);
    $controllerNameSelecCafedr = ucfirst($controllerNameSelecCafedr).'Controller';
    $controllerNameSelecCafedr = 'Controllers\\'.$controllerNameSelecCafedr;

    $conntrollerAddSelecCafedr = new $controllerNameSelecCafedr();
    $funcFrontSelecCafedr = $routeSelecCafedr->params['name'];
    $conntrollerAddSelecCafedr->funcFrontSelecCafedr();
}*/

echo "<a href='?SeleсStud'>студенты</a><br>";
/*if (isset($_GET['SeleсStud'])) {
    $routerSelecCafedr = new Router();
    $routerSelecCafedr->add('GET /controller/:name', function ($name) {
        echo 'Hello', $name, ' !';
    });

// search route
    $routeSelecCafedr = $routerSelecCafedr->find('GET /controller/funcFrontSelecStud');

// if route not found
    if (!$routeSelecCafedr) {
        echo '404 error';
    }
    //echo $route->params['createBD'];

    // echo $route->uri;
    $controllerNameSelecCafedr = isset($_GET['controller']);
    $controllerNameSelecCafedr = ucfirst($controllerNameSelecCafedr).'Controller';
    $controllerNameSelecCafedr = 'Controllers\\'.$controllerNameSelecCafedr;

    $conntrollerAddSelecCafedr = new $controllerNameSelecCafedr();
    $funcFrontSelecStud = $routeSelecCafedr->params['name'];
    $conntrollerAddSelecCafedr->funcFrontSelecStud();
}
*/
echo "<a href='?SeleсHomeWork'>список дз</a><br>";
/*if (isset($_GET['SeleсHomeWork'])) {
    $routerSelecCafedr = new Router();
    $routerSelecCafedr->add('GET /controller/:name', function ($name) {
        echo 'Hello', $name, ' !';
    });

// search route
    $routeSelecCafedr = $routerSelecCafedr->find('GET /controller/funcFrontSeleсHomeWork');

// if route not found
    if (!$routeSelecCafedr) {
        echo '404 error';
    }
    //echo $route->params['createBD'];

    // echo $route->uri;
    $controllerNameSelecCafedr = isset($_GET['controller']);
    $controllerNameSelecCafedr = ucfirst($controllerNameSelecCafedr).'Controller';
    $controllerNameSelecCafedr = 'Controllers\\'.$controllerNameSelecCafedr;

    $conntrollerAddSelecCafedr = new $controllerNameSelecCafedr();
    $funcFrontSeleсHomeWork = $routeSelecCafedr->params['name'];
    $conntrollerAddSelecCafedr->funcFrontSeleсHomeWork();
}*/
