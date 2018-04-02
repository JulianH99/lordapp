<?php


namespace Framework\Lib\Exceptions;

/**
 * Exception thrown when a method is not found in a controller or the name is invalid
 *
 * @author Julian Barrios
 * @package Framework\Lib\Exceptions
 * @version 0.1
 */
class MethodNotFoundException extends \Exception {

    /**
     * MethodNotFoundException constructor.
     * @param $method
     * @param $controller
     */
    public function __construct($method, $controller) {
        parent::__construct("$method not found in " . get_class($controller));
    }
    
}
