<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 23/10/2018
 * Time: 00:04
 */

include "Square.php";

$square = new Square("square", 5);

echo $square->calculateArea();
echo $square->calculatePerimeter();