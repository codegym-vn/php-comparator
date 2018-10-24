<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 23/10/2018
 * Time: 00:21
 */

include "CircleComparator.php";

$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 4);

$circleComparator = new CircleComparator();

var_dump($circleComparator->compare($circleOne, $circleTwo));
