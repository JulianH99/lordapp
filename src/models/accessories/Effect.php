<?php

namespace App\Models\Accessories;


use App\Interfaces\Applicable;

/**
 * Class Effect
 * @package App\Models\Accessories
 */
class Effect implements Applicable{
    private $affected_attribute = '';
    private $value = 0;

    /**
     * @param $affected_attribute
     * @param $value
     */
    public function __construct($affected_attribute, $value) {
        $this->affected_attribute = $affected_attribute;
        $this->value = $value;
    }

    /**
     * @param $object
     * @return bool
     */
    public function apply($object): bool {

        if (property_exists($object, $this->affected_attribute)) {

        }
    }



}