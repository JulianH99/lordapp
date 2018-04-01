<?php

namespace App\Models\Accessories;


/**
 * Represents a type of weapon with speficic attributes 
 * 
 * @author Julian Barrios
 * @version 0.1
 * @abstract
 */
abstract class WeaponType {
    /* class constants */
    const NONE = null;

    protected $effects = array(); // this array must be of type Effect


    /**
     * Returns the array of effects
     *
     * @return array<Effect>
     */
    public function getEffects() {
        return $this->effects;
    }

}