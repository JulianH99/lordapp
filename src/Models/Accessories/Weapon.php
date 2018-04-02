<?php

namespace App\Models\Accessories;


/**
 * Represents the weapon that a character will use
 * 
 * @author Julian Barrios
 * @version 0.1
 * @package  App\Models\Accessories
 * @abstract
 */
abstract class Weapon {
    /* class variables */

    /**
     * Represents no weapon
     */
    const NONE = null;

    /* object variables */

    /**
     * Name of the weapon
     * Must be override
     * @var string
     */
    protected $name = '';

    /**
     * Picture name, including extension, of the weapon
     * Must be override
     * @var string
     */
    protected $picture = '';

    /**
     * Weapon type of the weapon
     * @var WeaponType
     * @see \App\Models\Accessories\WeaponType
     */
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