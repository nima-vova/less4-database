<?php

include './vendor/autoload.php';

use Colorium\Routing\Router;



echo "<a href='?create'>создать структура БД</a><br>";

echo "<a href='?add'>заполнить БД данными</a><br>";

echo "<a href='?selectUnivers'>университеты</a><br>";


echo "<a href='?SelecCafedr'>кафедры</a><br>";

echo "<a href='?SeleсStud'>студенты</a><br>";

echo "<a href='?SeleсHomeWork'>список дз</a><br>";

echo "<a href='?FindStudent'>поиск студентов по имени</a><br>";
$RoutingRoot= new \Controllers\RoutingRooles();