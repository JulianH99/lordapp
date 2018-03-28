<?php

namespace Src\Interfaces;

/**
 * Holds the function to configure the values of a character randomly
 * 
 * @author Julian Barrios
 * @version 0.1
 */
interface AutomaticallyConfigurable {
    public function automatic_configure(): bool;
}