<?php

namespace Controllers;

use Colorium\Routing\Router;

class RoutingRooles
{
    public function __construct()
    {


        if (isset($_GET['create']) || isset($_GET['add']) || isset($_GET['selectUnivers']) || isset($_GET['SelecCafedr']) || isset($_GET['SeleсStud']) || isset($_GET['SeleсHomeWork'])) {
            $router = new Router();
            $router->add('GET /controller/:name', function () {
            });


        if (isset($_GET['create'])) {
                $route = $router->find('GET /controller/createBD');
            }

        if (isset($_GET['add'])) {
            $route = $router->find('GET /controller/addBD');
        }

        if (isset($_GET['selectUnivers']))
            $route = $router->find('GET /controller/funcFrontSelectUnivers');

        if (isset($_GET['SelecCafedr']))
            $route = $router->find('GET /controller/funcFrontSelecCafedr');

        if (isset($_GET['SeleсStud']))
            $route = $router->find('GET /controller/funcFrontSelecStud');

        if (isset($_GET['SeleсHomeWork']))
            $route = $router->find('GET /controller/funcFrontSeleсHomeWork');
        if (!$route) {
            echo '404 error';
        }
//echo $route->params['createBD'];


        $conntrollerAdd = new Controller();
        $param = $route->params['name'];
        $conntrollerAdd->$param();
    }

        if (isset($_GET['chengUniver'])){

    //index.php?idUniv=13&nameUniv=ЧДБК+&nameCity=Черкаси+&nameSite=www.cdbk.ua+&cheng=редагувати

        //echo "ddffdf";
            $router = new Router();
            $router->add('GET /controller/:name', function () {
            });
            $route = $router->find('GET /controller/testGo');

            $conntrollerAdd = new Controller();
            $param = $route->params['name'];

            $conntrollerAdd->$param();

        }

        if (isset($_GET['chengDepart'])){

            //index.php?idUniv=13&nameUniv=ЧДБК+&nameCity=Черкаси+&nameSite=www.cdbk.ua+&cheng=редагувати

            //echo "ddffdf";
            $router = new Router();
            $router->add('GET /controller/:name', function () {
            });
            $route = $router->find('GET /controller/chengCafedr');

            $conntrollerAdd = new Controller();
            $param = $route->params['name'];

            $conntrollerAdd->$param();

        }

        if (isset($_GET['chengStudent'])){

            //index.php?idUniv=13&nameUniv=ЧДБК+&nameCity=Черкаси+&nameSite=www.cdbk.ua+&cheng=редагувати

            //echo "ddffdf";
            $router = new Router();
            $router->add('GET /controller/:name', function () {
            });
            $route = $router->find('GET /controller/chengStud');

            $conntrollerAdd = new Controller();
            $param = $route->params['name'];

            $conntrollerAdd->$param();

        }

        if (isset($_GET['chengHomeWork'])){

            //index.php?idUniv=13&nameUniv=ЧДБК+&nameCity=Черкаси+&nameSite=www.cdbk.ua+&cheng=редагувати

            //echo "ddffdf";
            $router = new Router();
            $router->add('GET /controller/:name', function () {
            });
            $route = $router->find('GET /controller/chengHomeWork');

            $conntrollerAdd = new Controller();
            $param = $route->params['name'];

            $conntrollerAdd->$param();

        }

        if (isset($_GET['FindStudent'])){

            //index.php?idUniv=13&nameUniv=ЧДБК+&nameCity=Черкаси+&nameSite=www.cdbk.ua+&cheng=редагувати

            //echo "ddffdf";
            $router = new Router();
            $router->add('GET /controller/:name', function () {
            });
            $route = $router->find('GET /controller/FindStudent');

            $conntrollerAdd = new Controller();
            $param = $route->params['name'];

            $conntrollerAdd->$param();

        }
    }
}