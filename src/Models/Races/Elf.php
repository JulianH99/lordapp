<?php

namespace App\Models\Races;



class Elf extends Race  {

    public function __construct() {
        $this->description = "La mas antigua y noble de las raza." .
            " Son personas sabias y habiles en la batalla";
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