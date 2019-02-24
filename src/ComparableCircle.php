<?php

include "Circle.php";
include "Comparable.php";

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compareTo($circleOther)
    {
        $myRadius = $this->getRadius();
        $circleOtherRadius = $circleOther->getRadius();

        if ($myRadius > $circleOtherRadius) {
            return 1;
        }  else if($myRadius < $circleOtherRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}