<?php

namespace App\Models\Races;

/**
 * Represents the race of Dwarfs
 *
 * @author Julian Barrios
 * @package App\Models\Races
 * @uses \App\Models\Races\Race
 * @version 0.2
 */
class Dwarf extends Race {

    /**
     * Dwarf constructor.
     * Initializes the race attributes
     */
    public function __construct(){
        $this->name = "Dwarfs";
        $this->description = "Humanoids with small, but strong body "
                            . "and a great ability with weapons";
        $this->picture = "dwarf.jpg";
        $this->minmax_life = [90, 100];
        $this->minmax_power = [70, 90];
        $this->minmax_resistance = [80, 100];
        $this->minmax_speed = [50, 70];
        $this->proportions = [
            "life" => 3,
            "power" => -1,
            "resistance" => -1,
            "speed" => 0
        ];

    }
}