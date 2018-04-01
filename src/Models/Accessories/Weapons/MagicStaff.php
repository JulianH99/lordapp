<?php

namespace App\Models\Accessories\Weapons;

use App\Models\Accessories\Weapon;
use App\Models\Accessories\WeaponTypes\Magic;

/**
 * Undocumented class
 */
class MagicStaff extends Weapon {

    public function __construct() {
        $this->name = "Magic Staff";
        $this->picture = "mstaff.jpg";
        $this->weapon_type = new Magic();
    }

}
