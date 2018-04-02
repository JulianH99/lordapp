<?php


namespace App\Models\Races;


/**
 * Represents the race of the hobbits
 *
 * @author Julian Barrios
 * @package App\Models\Races
 * @version 0.2
 * @see \App\Models\Races\Race
 */
class Hobbit extends Race {

    /**
     * Hobbit constructor.
     * Initializes all the race attributes
     */
    public function __construct(){
        $this->name = "hobbits";
        $this->description = "Shorter than dwarfs. Some are stronger, some faster";
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