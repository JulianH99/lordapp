<?php

namespace Src\Characters;

use Src\Models\Races\Race;
use Src\Models\Accessories\Weapon;
use Src\Interfaces\Configurable;
use Src\Interfaces\AutomaticallyConfigurable;

/**
 * contains all the needed information a character can have
 * @author Julian Barrios
 * @version 0.1
 */
abstract class Character implements Configurable, AutomaticallyConfigurable{

    protected $life = 0;
    protected $race = Race::none;
    protected $power = 0;
    protected $resistance = 0;
    protected $speed = 0;
    protected $weapon = Weapon::none;
    protected $automatic_configure = true;

    

}