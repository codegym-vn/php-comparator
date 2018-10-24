<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 22/10/2018
 * Time: 23:37
 */

include "Circle.php";

$circle = new Circle("indigo", 4);

echo $circle->calculateArea();
echo $circle->calculatePerimeter();
