<?php

namespace App\Models\Accessories\Weapons;

use App\Models\Accessories\Weapon;
use App\Models\Accessories\WeaponTypes\Magic;

/**
 * Represents the Magic Staff weapon
 *
 * @author Julian Barrios
 * @package  App\Models\Accessories\Weapons
 * @uses \App\Models\Accessories\Weapon
 * @version 0.2
 */
class MagicStaff extends Weapon {

    /**
     * MagicStaff constructor
     *
     * @version 0.2
     */
    public function __construct() {
        $this->name = "Magic Staff";
        $this->picture = "mstaff.jpg";
        $this->weapon_type = new Magic();
    }

}
