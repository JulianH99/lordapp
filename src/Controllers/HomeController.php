<?php

namespace App\Controllers;

use Framework\Core\BaseController as Controller;
use Framework\Helpers\View;

/**
 *
 */
class HomeController extends Controller{

    public function index() {

        View::render('home');
    }

}