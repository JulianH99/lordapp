<?php

namespace App\Interfaces;


/**
 * Defines a method to configure the values of a class based on the params given
 * @author JulianH99
 * @version 0.2
 */
interface Configurable {
    public function configure($params = array()): bool;
}