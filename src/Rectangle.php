<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 22/10/2018
 * Time: 23:32
 */
include "Shape.php";

class Rectangle extends Shape
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(){
        return $this->height * $this->width;
    }

    public function calculatePerimeter(){
        return ($this->height + $this->width) * 2;
    }
}