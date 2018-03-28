<?php

namespace Src\Accessories;


/**
 * Represents a type of weapon with speficic attributes 
 * 
 * @author Julian Barrios
 * @version 0.1
 * @abstract
 */
abstract class WeaponType {
    protected $minmax_power = [];
    protected $effects = array(); // this array must be of type Effect

}