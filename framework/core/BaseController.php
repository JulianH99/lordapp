<?php

namespace Framework\Core;

/**
 * Holds the basic structure that a controller must follow
 * @author Julian Barrios
 * @abstract
 * @version 0.1
 * @license MIT
 */
abstract class BaseController {

    /**
     * Entry point of the controller. Default method
     *
     * @return void
     * @version 0.1
     */
    abstract public function index();

}