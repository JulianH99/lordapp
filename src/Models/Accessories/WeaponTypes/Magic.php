<?php

namespace App\Models\Accessories\WeaponTypes;

use App\Models\Accessories\Effect;
use App\Models\Accessories\WeaponType;

/**
 * Represents the Magic weapon type class
 *
 * @author Julian Barrios
 * @package App\Models\Accessories\WeaponTypes
 * @uses \App\Models\Accessories\WeaponType
 * @version 0.2
 */
class Magic extends WeaponType {

    /**
     * Magic constructor
     *
     * @see \App\Models\Accessories\Effect
     * @version 0.2
     */
    public function __construct() {
        $this->effects = [
            new Effect("power", 3),
            new Effect("resistance", 5),
            new Effect("speed", -5)
        ];
    }

}