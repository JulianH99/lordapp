<?php

namespace App\Models\Accessories\Weapons;

use App\Models\Accessories\Weapon;
use App\Models\Accessories\WeaponTypes\Melee;

class Sword extends Weapon { 

    public function __construct() {
        $this->name = "Sword";
        $this->picture = "sword.jpg";
        $this->weapon_type = new Melee();
        
    }


}