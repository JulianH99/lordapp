<?php

namespace Framework\Core;

use Framework\Lib\Exceptions\ControllerNotFoundException;
use Framework\Lib\Exceptions\MethodNotFoundException;

/**
 * Class Kernel
 * Bootstraps the application
 *
 * @author Julian Barrios
 * @package Framework\Core
 * @version 0.2
 *
 */
class Kernel {

    /**
     * Kernel constructor.
     * @throws ControllerNotFoundException
     * @throws MethodNotFoundException
     */
    public function __construct() {
        $this->init();
        $this->dispatch();
    }

    /**
     * Initializes application variables
     */
    public function init() {


        define("DS", DIRECTORY_SEPARATOR);

        define("ROOT_DIR", getcwd() . DS);

        define("FRAMEWORK_DIR", ROOT_DIR . 'framework' . DS);

        define("APP_DIR", ROOT_DIR . 'src' . DS);

        define("CONTROLLERS_DIR", APP_DIR . 'controllers' . DS);

        define("VIEWS_DIR", ROOT_DIR . 'views' . DS);

        //define("MODELS_DIR", APP_DIR  'models' . DS);

        //define("VIEWS_DIR", ROOT_DIR . 'views' . DS);

        define("CURRENT_CONTROLLER", $this->getController());

        define("CURRENT_METHOD", $this->getMethod());



    }

    /**
     * Returns the current controller
     *
     * @return string
     */
    private function getController() {

        $default = "home";
        if(isset($_REQUEST['c'])){
            if(!empty($_REQUEST['c'])) {
                return $_REQUEST['c'];
            }
        }
        return $default;
    }

    /**
     * Returns the current method
     *
     * @return string
     */
    private function getMethod() {
        $default = "index";
        if(isset($_REQUEST['m'])){
            if(!empty($_REQUEST['m'])) {
                return $_REQUEST['m'];
            }
        }
        return $default;
        
    }

    /**
     * Redirects according to the method and controller passed as parameters
     *
     * @throws ControllerNotFoundException
     * @throws MethodNotFoundException
     */
    public function dispatch() {

        
        $controllers  = require ROOT_DIR . 'controllersdef.php';

        if (isset($controllers[CURRENT_CONTROLLER])) {
            
            $controller = new $controllers[CURRENT_CONTROLLER]();
            if(method_exists($controller, CURRENT_METHOD)) {
                $method = CURRENT_METHOD;
               
                $controller->$method();
            }else {
                throw new MethodNotFoundException(CURRENT_METHOD, $controller);
            }

        }else {
            throw new ControllerNotFoundException(CURRENT_CONTROLLER);
        }

    }
}