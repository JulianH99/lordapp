<?php

namespace Framework\Lib\Exceptions;

class ControllerNotFoundException extends Exception {

    public function __construct($controller) {
        parent::__construct("$controller not found in controllersdef.php" );
    }
}