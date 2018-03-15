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

        $loader = new \Twig_Loader_Filesystem(VIEWS_DIR);

        $twig = new \Twig_Environment($loader);

        $view_name .= '.php';

        $view = VIEWS_DIR . $view_name;

        

        if(file_exists($view)) {

            /* render template */
            echo $twig->render($view_name, $args);

        }else{
            throw new ViewNotFoundException($view);
        }
    }
}