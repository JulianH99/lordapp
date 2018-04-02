<?php

namespace App\Models\Accessories\Weapons;

use App\Models\Accessories\Weapon;
use App\Models\Accessories\WeaponTypes\Melee;

/**
 * Represents the Sword weapon
 *
 * @author Julian Barrios
 * @package App\Models\Accessories\Weapons
 * @uses \App\Models\Accessories\Weapon
 * @version 0.2
 */
class Sword extends Weapon {

    /**
     * Sword constructor
     *
     * @version 0.2
     */
    public function __construct() {
        $this->name = "Sword";
        $this->picture = "sword.jpg";
        $this->weapon_type = new Melee();
        
    }


}