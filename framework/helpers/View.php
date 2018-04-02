<?php


namespace Framework\Helpers;

use Framework\Lib\Exceptions\ViewNotFoundException;

/**
 * Handles the rendering and data passing from the controllers
 * to the views
 *
 * @author Julian Barrios
 * @package Framework\Helpers
 * @version 0.5
 */
abstract class View {

    /**
     * Renders the view in $view_name and passes the data in $args
     *
     * @param $view_name
     * @param array $args
     * @throws ViewNotFoundException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     * @version 0.5
     */
    public static function render($view_name, $args = []) {

        $loader = new \Twig_Loader_Filesystem(VIEWS_DIR);

        $twig = new \Twig_Environment($loader);

        $view_name .= '.twig';

        $view = VIEWS_DIR . $view_name;


        if(file_exists($view)) {

            /* render template */
            echo $twig->render($view_name, $args);

        }else{
            throw new ViewNotFoundException($view);
        }
    }
}