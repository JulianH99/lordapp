<?php
/**
 * 
 */
namespace Framework\Helpers;

use Framework\Lib\Exceptions\ViewNotFoundException;

/**
 * 
 */
abstract class View {

    public static function render($view_name, $args = []) {

        $view = VIEWS_DIR . $view_name . '.php';

        if(file_exists($view)) {

            if(count($args) != 0){
                foreach ($args as $var => $val) {
                    $_SESSION[$var] = $val;
                }
            }

            include $view;
            

        }else{
            throw new ViewNotFoundException($view);
        }
    }

}