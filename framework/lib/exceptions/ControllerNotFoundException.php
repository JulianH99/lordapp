<?php

namespace Framework\Lib\Exceptions;

/**
 * Exception thrown when a controller is not found in the proper file
 * or the name passed in URL is not valid
 *
 * @author Julian Barrios
 * @package Framework\Lib\Exceptions
 * @version 0.1
 */
class ControllerNotFoundException extends \Exception {

    /**
     * ControllerNotFoundException constructor.
     * @param $controller
     */
    public function __construct($controller) {
        parent::__construct("$controller not found in controllersdef.php" );
    }
}