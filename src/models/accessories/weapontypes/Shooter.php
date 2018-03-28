<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 3/28/2018
 * Time: 3:31 PM
 */

namespace App\Models\Accessories\WeaponTypes;

use App\Models\Accessories\Effect;
use App\Models\Accessories\WeaponType;

/**
 * Class Shooter
 * @package Src\models\accessories\WeaponTypes
 */
class Shooter extends WeaponType {

    public function __construct() {
        $this->minmax_power = [80, 90];
        $this->effects = [
            new Effect("power", 3),
            new Effect("speed", 6),
            new Effect("resistance", -3)
        ];
    }

}