<?php
/**
 * Created by IntelliJ IDEA.
 * User: julian
 * Date: 26/03/18
 * Time: 10:34 AM
 */

namespace Src\Models\Races;


use Src\Accessories\Weapon;

abstract class Race {

    /* class variables */
    public static $none = null;

    /* object variables */
    protected $description = '';
    protected $minmax_life = [];
    protected $minmax_power = [];
    protected $minmax_resistance = [];
    protected $minmax_speed = [];
    protected $proportions = [];

    

}