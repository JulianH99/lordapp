<?php

/**
 * 
 */
namespace Framework\Lib\Exceptions;

/**
 * 
 */
class MethodNotFoundException extends \Exception {

    public function __construct($method, $controller) {
        parent::__construct("$method not found in " . get_class($controller));
    }
    
}
