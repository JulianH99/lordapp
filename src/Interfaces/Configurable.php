<?php

namespace App\Interfaces;


/**
 * Defines a method to configure the values of a class based on the params given
 * @author JulianH99
 * @package App\Interfaces
 * @version 0.2
 */
interface Configurable {

    /**
     * Configures a class based on the parameters given
     *
     * @param array $params
     * @return bool
     * @version 0.1
     */
    public function configure($params = array()): bool;
}