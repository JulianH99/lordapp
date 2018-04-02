<?php

namespace App\Models\Accessories;


use App\Interfaces\Applicable;
use App\Models\Characters\Character;

/**
 * Class Effect. Represents the effect that can be applied when a user picks a
 * specific weapon
 * @author Julian Barrios
 * @package App\Models\Accessories
 * @uses \App\Interfaces\Applicable
 * @version 0.3
 *
 */
class Effect implements Applicable{

    /**
     * Affected attribute name by the effect
     * @var string
     */
    private $affected_attribute = '';

    /**
     * Value to apply to the affected attribute
     * @var int
     */
    private $value = 0;

    /**
     * Initializes the class attributes
     *
     * @param $affected_attribute
     * @param $value
     */
    public function __construct($affected_attribute, $value) {
        $this->affected_attribute = $affected_attribute;
        $this->value = $value;
    }

    /**
     * Returns the affected attribute from the effect
     * 
     * @return string
     */
    public function getAffectedAttribute() {
        return $this->affected_attribute;
    }

    /**
     * Returns the value to apply to the affected attribute
     *
     * @return integer
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * Applies the effect to the $object, checking if this
     * has the attribute defined in $this->affected attribute.
     *
     * @see \App\Interfaces\Applicable
     * @see \App\Models\Characters\Character
     * @param $object
     * @return bool
     * @version 0.2
     */
    public function apply(Character $object): bool {

        if (property_exists($object, $this->affected_attribute)) {

            /* get setter and getter method for the affected attribute */
            $setter_method = "set" . ucfirst($this->affected_attribute);
            $getter_method = "get" . ucfirst($this->affected_attribute);

            /* check if the methods exist in the class */
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