<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 22/10/2018
 * Time: 23:33
 */
include "Rectangle.php";

class Square extends Rectangle
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
}