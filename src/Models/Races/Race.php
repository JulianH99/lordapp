<?php
/**
 * Created by IntelliJ IDEA.
 * User: julian
 * Date: 26/03/18
 * Time: 10:34 AM
 */

namespace App\Models\Races;


/**
 * Class Race
 * @version 0.2
 */
abstract class Race {

    /* class variables */

    /**
     * Represents no race
     */
    const NONE = null;

    /* object variables */

    /**
     * Name of the race.
     * Must be override
     * @var string
     */
    protected $name = '';

    /**
     * Description of the race.
     * Must be override
     * @var string
     */
    protected $description = '';

    /**
     * Picture of the race, including file extension
     * Must be override
     * @var string
     */
    protected $picture = '';

    /**
     * Minimum and maximum of life the race can have
     * @var array
     */
    protected $minmax_life = [];

    /**
     * Minimum and maximum of power the race can have
     * @var array
     */
    protected $minmax_power = [];

    /**
     * Minimum and maximum of resistance the race can have
     * @var array
     */
    protected $minmax_resistance = [];

    /**
     * Minimum and maximum of speed the race can have
     * @var array
     */
    protected $minmax_speed = [];

    /**
     * Proportions given to the values of the race
     * Must be override
     * @var array
     */
    protected $proportions = [
        "life" => 0,
        "power" => 0,
        "resistance" => 0,
        "speed" =>0
    ];

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getPicture() : string {
        return $this->picture;
    }

    /**
     * @return array
     */
    public function getMinmaxLife(): array
    {
        return $this->minmax_life;
    }

    /**
     * @return array
     */
    public function getMinmaxPower(): array
    {
        return $this->minmax_power;
    }

    /**
     * @return array
     */
    public function getMinmaxResistance(): array
    {
        return $this->minmax_resistance;
    }

    /**
     * @return array
     */
    public function getMinmaxSpeed(): array
    {
        return $this->minmax_speed;
    }

    /**
     * @return array
     */
    public function getProportions(): array
    {
        return $this->proportions;
    }








}