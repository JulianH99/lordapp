<?php

namespace App\Models\Accessories;


use App\Interfaces\Applicable;

/**
 * Class Effect. Represents the effect that can be applied when a user picks a
 * specific weapon
 * @author Julian Barrios
 * @package App\Models\Accessories
 * @version 0.1
 *
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
     * Applies the effect to the $object, checking if this
     * has the attribute defined in $this->affected attribute.
     * @see \App\Interfaces\Applicable
     * @param $object
     * @return bool
     */
    public function apply($object): bool {

        if (property_exists($object, $this->affected_attribute)) {

            $setter_method = "set" . ucfirst($this->affected_attribute);
            $getter_method = "get" . ucfirst($this->affected_attribute);

            if (method_exists($object, $getter_method)
                    && method_exists($object, $setter_method)) {
                $current_value = $object->$getter_method();
                $new_value = $current_value + $this->value;
                $object->$setter_method($new_value);

                return true;


            }
        }
        return false;
    }



}