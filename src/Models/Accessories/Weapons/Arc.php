<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 3/28/2018
 * Time: 3:26 PM
 */

namespace App\Models\Accessories\Weapons;

use App\Models\Accessories\Weapon;
use App\Models\Accessories\WeaponTypes\Shooter;

/**
 * Class Arc
 * @package App\models\accessories\weapons
 */
class Arc extends Weapon {

    public function __construct() {
        $this->name = "Arc";
        $this->picture = "arc.jpg";
        $this->weapon_type = new Shooter();
    }

}