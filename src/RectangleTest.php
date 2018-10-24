<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 22/10/2018
 * Time: 23:47
 */

include "Rectangle.php";

$rectangle = new Rectangle("rectangle", 5, 4);

echo $rectangle->calculateArea();
echo $rectangle->calculatePerimeter();