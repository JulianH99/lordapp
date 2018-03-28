<?php

namespace App\Models\Characters;


use App\Helpers\RangeHelper;
use App\Models\Races\Race;
use App\Models\Accessories\Weapon;
use App\Interfaces\Configurable;
use App\Interfaces\AutomaticallyConfigurable;

/**
 * contains all the needed information a character can have
 * @author Julian Barrios
 * @version 0.1
 */
abstract class Character implements Configurable, AutomaticallyConfigurable{

    protected $life = 0;
    protected $race = Race::NONE;
    protected $power = 0;
    protected $resistance = 0;
    protected $speed = 0;
    protected $weapon = Weapon::NONE;
    protected $automatic_configure = true;

    /**
     * @return bool
     */
    public function automatic_configure(): bool{

        if ($this->race != null) {
            $minmax_life = $this->race->getMinmaxLife();
            $minmax_power = $this->race->getMinmaxPower();
            $minmax_resistance = $this->race->getMinmaxResistance();
            $minmax_speed = $this->race->getMinmaxSpeed();

            $this->life = rand($minmax_life[0], $minmax_life[1]);
            $this->power = rand($minmax_power[0], $minmax_power[1]);
            $this->resistance = rand($minmax_resistance[0], $minmax_resistance[1]);
            $this->speed = rand($minmax_speed[0], $minmax_speed[1]);

            return true;
        }

        return false;
    }

    /**
     * @param array $params
     * @return bool
     */
    public function configure($params = array()): bool{

        if (isset($params['life'])
            && isset($params['power'])
            && isset($params['resistance'])
            && isset($params['speed'])
            && isset($params['weapon'])) {

            if (RangeHelper::in($params['life'], $this->race->getMinmaxLife())
                && RangeHelper::in($params['power'], $this->race->getMinmaxPower())
                && RangeHelper::in($params['resistance'], $this->race->getMinmaxResistance())
                && RangeHelper::in($params['speed'], $this->race->getMinmaxSpeed())){

                $this->life = $params['life'];
                $this->power = $params['power'];
                $this->resistance = $params['resistance'];
                $this->speed = $params['speed'];
                $this->weapon = $params['weapon'];

                return true;
            }
            return false;
        }
        return false;
    }


}