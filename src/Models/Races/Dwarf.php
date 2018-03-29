<?php

namespace App\Models\Races;

/**
 * Class Dwarf
 * @version 0.1
 */
class Dwarf extends Race {

    public function __construct(){
        $this->description = "Humanoides de poco tamaño, pero con cuerpos robustos "
                            . "y un gran manejo de las armas";
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