<?php

namespace App\Controllers;

use Framework\Core\BaseController as Controller;
use Framework\Helpers\View;

/**
 * Entry point of the application. Only shows the welcome screen
 * 
 * @author Julian Barrios
 * @package App\Controllers
 * @uses \Framework\Core\BaseController
 * @version 0.4
 */
class HomeController extends Controller{

    /**
     * Shows the welcome screen
     *
     * @return void
     * @see \Framework\Helpers\View
     * @throws \Framework\Lib\Exceptions\ViewNotFoundException
     * @version 0.2
     */
    public function index() {

        View::render('home');
    }

}