<?php

namespace Framework\Core;


use Framework\Lib\Exceptions\ControllerNotFoundException;
use Framework\Lib\Exceptions\MethodNotFoundException;
/**
 * 
 */
class Kernel {

    public function __construct() {
        $this->init();
        $this->dispatch();
    }

    /**
     * defines application constants
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

        define("CURRENT_CONTROLLER", isset($_REQUEST['c']) ? $_REQUEST['c'] : 'home');

        define("CURRENT_METHOD", isset($_REQUEST['m'])? $_REQUEST['m']: 'index');


        $GLOBALS['config'] = include APP_DIR . '/config/config.php';

    }


    public function dispatch() {

        
        $controllers  = require ROOT_DIR . 'controllersdef.php';

        if(isset($controllers[CURRENT_CONTROLLER])) {
            
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