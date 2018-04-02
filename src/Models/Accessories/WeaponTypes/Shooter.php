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
 * Represents the Shooter weapon type class
 *
 * @author Julian Barrios
 * @package App\Models\Accessories\WeaponTypes
 * @uses \App\Models\Accessories\WeaponType
 * @version 0.2
 */
class Shooter extends WeaponType {

    /**
     * Shooter constructor.
     *
     * @see \App\Models\Accessories\Effect
     * @version 0.2
     */
    public function __construct() {
        $this->effects = [
            new Effect("power", 3),
            new Effect("speed", 6),
            new Effect("resistance", -3)
        ];
    }

}