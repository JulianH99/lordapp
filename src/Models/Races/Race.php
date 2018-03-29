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
    const NONE = null;

    /* object variables */
    protected $description = '';
    protected $minmax_life = [];
    protected $minmax_power = [];
    protected $minmax_resistance = [];
    protected $minmax_speed = [];
    protected $proportions = [
        "life" => 0,
        "power" => 0,
        "resistance" => 0,
        "speed" =>0
    ];

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
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