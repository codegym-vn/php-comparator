<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 23/10/2018
 * Time: 00:08
 */
include "Circle.php";
include "Comparator.php";

class CircleComparator implements Comparator
{
    public function compare($circleOne, $circleTwo)
    {
        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();

        if ($radiusOne > $radiusTwo) {
            return 1;
        }  else if($radiusOne < $radiusTwo) {
            return -1;
        } else {
            return 0;
        }

    }
}