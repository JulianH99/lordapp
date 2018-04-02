<?php

namespace App\Models\Accessories\WeaponTypes;

use App\Models\Accessories\Effect;
use App\Models\Accessories\WeaponType;

/**
 * Represents the Melee WeaponType
 *
 * @author Julian Barrios
 * @package App\Models\Accessories\WeaponTypes
 * @uses \App\Models\Accessories\WeaponType
 * @version 0.2
 */
class Melee extends WeaponType{

    /**
     * Melee constructor
     *
     * @see \App\Models\Accessories\Effect
     * @version 0.2
     */
    public function __construct() {
        $this->effects = [
            new Effect("resistance", 5),
            new Effect("power", 5),
            new Effect("speed", -3)
        ];
    }

}