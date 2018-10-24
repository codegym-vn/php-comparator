<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 22/10/2018
 * Time: 23:43
 */

include "Cylinder.php";


$cylinder = new Cylinder("marry", 4, 3);

echo $cylinder->calculateArea();
echo $cylinder->calculateVolume();