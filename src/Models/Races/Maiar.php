<?php

namespace App\Models\Races;

/**
 * Represents the race of the maiars
 * @author Julian Battios
 * @package  App\Models\Races
 * @uses \App\Models\Races\Race
 * @version 0.2
 */
class Maiar extends Race {

    /**
     * Maiar constructor.
     * Initializes the race attributes
     */
    public function __construct() {
        $this->name = "maiars";
        $this->description = "Powerful magic beings created before universe itself";
        $this->picture = "maiar.jpg";
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