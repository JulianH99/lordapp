<?php

namespace App\Models\Races;


/**
 * Represents the race of the orcs
 *
 * @author Julian Barrios
 * @package App\Models\Races
 * @uses \App\Models\Races\Race
 * @version 0.2
 */
class Orc extends Race {

    /**
     * Orc constructor.
     * Initializes all the race attributes
     */
    public function __construct() {
        $this->name = "orcs";
        $this->description = "The most evil beings on earth. The can't resist sunlight, "
                            . " they rather dark places, although they are fast and strong";
        $this->picture = "orc.jpg";
        $this->minmax_life = [60, 80];
        $this->minmax_power = [90, 100];
        $this->minmax_resistance = [50, 70];
        $this->minmax_speed = [80, 95];
        $this->proportions = [
            "life" => 4,
            "power" => 1,
            "resistance" => 2,
            "speed" => -1
        ];
    }
    
}