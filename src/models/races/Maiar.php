<?php

namespace App\Models\Races;

/**
 * Class Maiar. Represents the common attributes a Maiar must have
 * @author Julian Battios
 * @version 0.1
 */
class Maiar extends Race {

    /**
     * Maiar constructor.
     */
    public function __construct() {
        $this->description = "Poderosos seres magicos creados antes del universo mismo";
        $this->minmax_life = [90, 100];
        $this->minmax_power = [90, 100];
        $this->minmax_resistance = [60, 80];
        $this->minmax_speed = [70, 90];
        $this->proportions = [2, -5, 1, -1];
        $this->proportions = [
            "life" => 2,
            "power" => -5,
            "resistance" => 1,
            "speed" => -1
        ];


    }


}