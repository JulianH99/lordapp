<?php


namespace App\Models\Characters;


use App\Models\Races\Maiar;

/**
 * The Gandalf class represents the known character of the lord of the rings
 * @author Julian Barrios
 * @version 0.1
 */
class Gandalf extends Character {

    /**
     * Gandalf constructor.
     */
    public function __construct(){
        $this->name = "gandalf";
        $this->picture = 'gandalf.jpg';
        $this->race = new Maiar();
    }

}