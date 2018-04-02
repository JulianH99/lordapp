<?php

namespace App\Models\Accessories\Weapons;

use App\Models\Accessories\Weapon;
use App\Models\Accessories\WeaponTypes\Shooter;

/**
 * Represents the Arc weapon
 *
 * @author Julian Barrios
 * @package App\models\accessories\weapons
 * @version 0.3
 * @uses \App\Models\Accessories\Weapon
 */
class Arc extends Weapon {

    /**
     * Arc constructor
     *
     * @version 0.2
     */
    public function __construct() {
        $this->name = "Arc";
        $this->picture = "arc.jpg";
        $this->weapon_type = new Shooter();
    }

}