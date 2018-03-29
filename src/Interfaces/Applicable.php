<?php

namespace App\Interfaces;

/**
 * Defines a method that every effect must implement in order to be applicable
 * to an object
 * @author Julian Barrios
 * @version 0.1
 */
interface Applicable {

    /**
     * Applies an effect to a given object $object
     * @param $object
     * @version 0.1
     * @return bool whether the application could be successful or not
     */
    public function apply($object) : bool;
}