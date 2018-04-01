<?php

namespace App\Models\Accessories;


/**
 * Represents the weapon that a character will use
 * 
 * @author Julian Barrios
 * @version 0.1
 */
abstract class Weapon {
    /* class variables */
    const NONE = null;

    /* object variables */
    protected $name = '';
    protected $picture = '';
    protected $weapon_type = WeaponType::NONE;
    

    /**
     * Returns the weapon's name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Returns the picture of the weapon
     *
     * @return string
     */
    public function getPicture() {
        return $this->picture;
    }

    /**
     * Returns the weapon type of the weapon
     * 
     * @return WeaponType
     */
    public function getWeaponType() {
        return $this->weapon_type;
    }


}