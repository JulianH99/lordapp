<?php

namespace App\Models\Races;


/**
 * Represents the race of the elfs
 * @author Julian Barrios
 * @package App\Models\Races
 * @uses \App\Models\Races\Race
 * @version 0.2
 */
class Elf extends Race  {

    /**
     * Elf constructor.
     * Initializes all the race attributes
     */
    public function __construct() {
        $this->name = "elfs";
        $this->description = "The oldest and most humble race." .
            " They are wise and great in the battle field";
        $this->picture = "elf.jpg";
        $this->minmax_life = [80, 100];
        $this->minmax_power = [80, 100];
        $this->minmax_resistance = [70, 90];
        $this->minmax_speed = [80, 100];
        $this->proportions = [
            "life" => 1,
            "power" => -2,
            "resistance" => -1,
            "speed" => 1
        ];
    }
    
}