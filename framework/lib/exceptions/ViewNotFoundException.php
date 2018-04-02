<?php


namespace Framework\Lib\Exceptions;

/**
 * Exception thrown when a view is not found or the name is invalid
 *
 * @author Julian Barrios
 * @package Framework\Lib\Exceptions
 * @version 0.2
 */
class ViewNotFoundException extends \Exception {

    public function __construct($view) {
        parent::__construct("$view not found in " . VIEWS_DIR );
    } 
}