<?php

namespace Src\Accessories;

/**
 * Defines a method that every effetc must implement in order to be appliable
 * to an object
 * @author Julian Barrios
 * @version 0.1
 */
interface Applicable {

    /**
     * Applys an effect to a given object $object
     * @param $object
     * @version 0.1
     * @return bool wheter the application could be successfull or not
     */
    public function apply($object) : bool;
}