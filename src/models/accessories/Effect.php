<?php

namespace Src\Accessories;


use Src\Interfaces\Applicable;

/**
 * 
 */
class Effect implements Applicable{
    private $affected_attribute = '';
    private $value = 0;

    /**
     * 
     */
    public function __construct($affected_attribute, $value) {
        $this->affected_attribute = $affected_attribute;
        $this->value = $value;
    }

    /**
     * 
     */
    public function apply($object) { 

        if(property_exists($object, $this->affected_attribute)) {

        }
    }



}