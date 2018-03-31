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

    protected $name = '';
    protected $life = 0;
    protected $race = Race::NONE;
    protected $power = 0;
    protected $resistance = 0;
    protected $speed = 0;
    protected $weapon = Weapon::NONE;
    protected $picture = '';
    protected $automatic_configure = true;



    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPicture(): string
    {
        return $this->picture;
    }



    /**
     * @return int
     */
    public function getLife(): int
    {
        return $this->life;
    }

    /**
     * @param int $life
     * @return Character
     */
    public function setLife(int $life): Character
    {
        $this->life = $life;
        return $this;
    }

    /**
     * @return null
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * @param null $race
     * @return Character
     */
    public function setRace($race)
    {
        $this->race = $race;
        return $this;
    }

    /**
     * @return int
     */
    public function getPower(): int
    {
        return $this->power;
    }

    /**
     * @param int $power
     * @return Character
     */
    public function setPower(int $power): Character
    {
        $this->power = $power;
        return $this;
    }

    /**
     * @return int
     */
    public function getResistance(): int
    {
        return $this->resistance;
    }

    /**
     * @param int $resistance
     * @return Character
     */
    public function setResistance(int $resistance): Character
    {
        $this->resistance = $resistance;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     * @return Character
     */
    public function setSpeed(int $speed): Character
    {
        $this->speed = $speed;
        return $this;
    }

    /**
     * @return null
     */
    public function getWeapon()
    {
        return $this->weapon;
    }

    /**
     * @param null $weapon
     * @return Character
     */
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAutomaticConfigure(): bool
    {
        return $this->automatic_configure;
    }

    /**
     * @param bool $automatic_configure
     * @return Character
     */
    public function setAutomaticConfigure(bool $automatic_configure): Character
    {
        $this->automatic_configure = $automatic_configure;
        return $this;
    }



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