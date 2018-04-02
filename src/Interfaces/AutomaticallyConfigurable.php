<?php

namespace App\Interfaces;

/**
 * Holds the function to configure the values of a character randomly
 * 
 * @author Julian Barrios
 * @package App\Interfaces
 * @version 0.1
 */
interface AutomaticallyConfigurable {

    /**
     * Configures automatically a class
     * @return bool
     * @version 0.1
     */
    public function automatic_configure(): bool;
}