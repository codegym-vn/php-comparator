<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 24/02/2019
 * Time: 16:48
 */

include "ComparableCircle.php";

$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 2);

var_dump($circleOne->compareTo($circleTwo));
