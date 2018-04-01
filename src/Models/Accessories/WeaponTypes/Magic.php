<?php

namespace App\Models\Accessories\WeaponTypes;

use App\Models\Accessories\Effect;
use App\Models\Accessories\WeaponType;

class Magic extends WeaponType {

    public function __construct() {
        $this->effects = [
            new Effect("power", 3),
            new Effect("resistance", 5),
            new Effect("speed", -5)
        ];
    }

}