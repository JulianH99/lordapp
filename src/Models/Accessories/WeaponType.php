<?php

namespace App\Models\Accessories;


/**
 * Represents a type of weapon with speficic attributes 
 * 
 * @author Julian Barrios
 * @package App\Models\Accessories
 * @version 0.1
 * @abstract
 */
abstract class WeaponType {
    /* class constants */

    /**
     * Represents no weapon type
     */
    const NONE = null;

    /**
     * Array of effects to apply
     * @var array
     * @see \App\Models\Accessories\Effect
     */
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