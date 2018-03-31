<?php


namespace App\Models\Races;



class Men extends Race {

    public function __construct(){
        $this->name = "hombres";
        $this->description = "Una de las razas más antiguas y más numerosas de la tierra"
                            . ". Tienes menos resistencia y poder que los demas, pero una longevidad y"
                            . " y velocidad considerables";
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