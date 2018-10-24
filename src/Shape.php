<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 22/10/2018
 * Time: 23:29
 */

class Shape
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show(){
        return "I am a shape. My name is $this->name";
    }
}