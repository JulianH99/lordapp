<?php


namespace App\Models\Characters;


use App\Models\Races\Maiar;
use App\Models\Accessories\Weapons\MagicStaff;

/**
 * The Gandalf class represents the known character of the lord of the rings
 * @author Julian Barrios
 * @package App\Models\Characters
 * @version 0.1
 * @uses \App\Models\Characters\Character
 */
class Gandalf extends Character {

    /**
     * Gandalf constructor.
     *
     */
    public function __construct(){
        $this->name = "gandalf";
        $this->picture = 'gandalf.jpg';
        $this->race = new Maiar();
        $this->weapon = new MagicStaff();
    }

}