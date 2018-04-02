<?php


namespace App\Models\Races;


/**
 * Represents the race of the men
 *
 * @author Julian Barrios
 * @package App\Models\Races
 * @uses \App\Models\Races\Race
 * @version 0.2
 */
class Men extends Race {

    /**
     * Men constructor.
     * Initializes all the race attributes
     */
    public function __construct(){
        $this->name = "men";
        $this->description = "One of the oldest and most numerous races on earth"
                            . ". They have less resistance and power than the other races, but long life"
                            . " and considerable speed";
        $this->picture = "men.jpg";
        $this->minmax_life = [80, 100];
        $this->minmax_power = [60, 70];
        $this->minmax_resistance = [50, 70];
        $this->minmax_speed = [80, 95];
        $this->proportions = [
            "life" => 3,
            "power" => -1,
            "resistance" => 0,
            "speed" => 0
        ];
    }

}