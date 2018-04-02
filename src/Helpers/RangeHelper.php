<?php


namespace App\Helpers;


/**
 * Contains method that provide useful operations when dealing with ranges
 * @author Julian Barrios
 * @package App\Helpers
 * @version 0.1
 */
class RangeHelper{

    /**
     * Checks if the given value is contained in the
     * values of the range
     * @param $value
     * @param $range
     * @return bool
     */
    public static function in($value, $range) : bool {
        $minval = isset($range['min'])? $range['min'] : $range[0];
        $maxval = isset($range['max'])? $range['max'] : $range[1];

        if($value >= $minval && $value <= $maxval)
            return true;
        return false;
    }

}