<?php


namespace Src\Models\Characters;

use Src\Models\Races\Maiar;
use Src\Traits\AutomaticallyConfigurable;
use Src\Traits\Configurable;

/**
 * The Gandalf class represents the known character of the lord of the rings
 * @author JulianH99 <juliancorredors99@outlook.com>
 * @license MIT
 * @package Src\Models\Characters
 * @version 0.1
 */
class Gandalf extends Maiar {

    use Configurable, AutomaticallyConfigurable;


}