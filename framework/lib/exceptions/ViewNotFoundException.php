<?php
/**
 * 
 */
namespace Framework\Lib\Exceptions;

/**
 * 
 */
class ViewNotFoundException extends \Exception {

    public function __construct($view) {
        parent::__construct("$view.php not found in " . VIEWS_DIR );
    } 
}