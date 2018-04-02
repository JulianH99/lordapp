<?php

namespace App\Interfaces;

use App\Models\Characters\Character;

/**
 * Defines a method that every effect must implement in order to be applicable
 * to an object
 * @author Julian Barrios
 * @package App\Interfaces
 * @version 0.1
 */
interface Applicable {

    /**
     * Applies an effect to a given object $object
     * @param $object
     * @version 0.1
     * @return bool whether the application could be successful or not
     * @see \App\Models\Characters\Character
     */
    public function apply(Character $object) : bool;
}