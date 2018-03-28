<?php

namespace App\Models\Accessories\WeaponTypes;

use App\Models\Accessories\Effect;
use App\Models\Accessories\WeaponType;

/**
 * Class Melee
 * @package App\Models\Accessories\WeaponTypes
 */
class Melee extends WeaponType{
    
    public function __construct() {
        $this->minmax_power = [80, 100];
        $this->effects = [
            new Effect("resistance", 5),
            new Effect("power", 5),
            new Effect("speed", -3)
        ];
    }

}