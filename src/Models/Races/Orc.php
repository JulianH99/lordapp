<?php

namespace App\Models\Races;

class Orc extends Race {

    /**
     * Orc constructor.
     */
    public function __construct() {
        $this->name = "Orcos";
        $this->description = "Los seres más malvados de la tierra. No son resistentes a la luz del sol"
                            . " prefieren los ambientes oscuros, aunque son fuertes y rapidos";
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