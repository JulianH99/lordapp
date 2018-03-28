<?php

namespace Framework\Core;

/**
 * Holds the basic structure that a controller must follow
 * @author JulianH99 <juliancorredors99@outlook.com>
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