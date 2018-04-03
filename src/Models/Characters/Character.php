<?php

namespace App\Models\Characters;


use App\Helpers\RangeHelper;
use App\Models\Accessories\WeaponType;
use App\Models\Races\Race;
use App\Models\Accessories\Weapon;
use App\Interfaces\Configurable;
use App\Interfaces\AutomaticallyConfigurable;

/**
 * Contains all the needed information a character can have
 *
 * @author Julian Barrios
 * @version 0.5
 * @package App\Models\Characters
 * @uses \App\Interfaces\AutomaticallyConfigurable
 * @uses \App\Interfaces\Configurable
 * @abstract
 */
abstract class Character implements Configurable, AutomaticallyConfigurable{

    /**
     * Name of the character
     * @var string
     */
    protected $name = '';

    /**
     * Life points of the character
     * @var int
     */
    protected $life = 0;

    /**
     * Race of the character
     * @var Race
     * @see \App\Models\Races\Race
     */
    protected $race = Race::NONE;

    /**
     * Power points of the character
     * @var int
     */
    protected $power = 0;

    /**
     * Resistance points of the character
     * @var int
     */
    protected $resistance = 0;

    /**
     * Speed points of the character
     * @var int
     */
    protected $speed = 0;

    /**
     * Weapon that the character is going to use
     * @var Weapon
     * @see \App\Models\Accessories\Weapon
     */
    protected $weapon = Weapon::NONE;

    /**
     * Picture of the character, including file extension
     * @var string
     */
    protected $picture = '';



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
     * @param Race $race
     * @return Character
     */
    public function setRace(Race $race)
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
     * @return Weapon
     */
    public function getWeapon()
    {
        return $this->weapon;
    }

    /**
     * @param Weapon $weapon
     * @return Character
     */
    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
        return $this;
    }



    /**
     * Configures automatically the character based on the limits
     * from its race
     *
     * @return bool
     * @version 0.1
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
     * Configures the character based on the params given in the array
     *
     * @param array $params
     * @return bool
     * @version 0.1
     */
    public function configure($params = array()): bool{

        /* check if all attributes are in the array */

        if (isset($params['life'])
            && isset($params['power'])
            && isset($params['resistance'])
            && isset($params['speed'])
            && isset($params['weapon'])) {

            /* check if all values are valid in the limits of the character's race */
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