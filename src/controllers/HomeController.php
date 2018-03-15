<?php
/**
 * 
 */

namespace Src\Controllers;

use Framework\Core\BaseController as Controller;
use Framework\Helpers\View;

/**
 * 
 */
class HomeController extends Controller{ 
    
    public function index() {
        
        View::render('home');
    }

    public function get() {

        $name = $_POST['name'];

        View::render('home', ['name' => $name]);
    }
}