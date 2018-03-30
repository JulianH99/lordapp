<?php


namespace App\Models\Races;



class Hobbit extends Race {

    public function __construct(){
        $this->name = "Hobbits";
        $this->description = "Más pequeños que los enanos. Algunos son fuertes, otros más rápidos";
        $this->picture = "hobbit.jpg";
        $this->minmax_life =  [60, 80];
        $this->minmax_power = [80, 95];
        $this->minmax_resistance = [60, 80];
        $this->minmax_speed = [80, 100];
        $this->proportions = [
            "life" => 1,
            "power" => 1,
            "resistance" => 1,
            "speed" => -1
        ];
    }

}