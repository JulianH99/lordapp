<?php
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 29/03/18
 * Time: 09:44 PM
 */

namespace App\Controllers;

use App\Models\Characters\Gandalf;
use App\Models\Races\Dwarf;
use App\Models\Races\Elf;
use App\Models\Races\Hobbit;
use App\Models\Races\Maiar;
use App\Models\Races\Men;
use App\Models\Races\Orc;
use Framework\Helpers\View;
use Framework\Core\BaseController as Controller;


class ChoicesController extends Controller {


    private $races = [];
    private $chars = [];

    public function __construct() {
        $this->races = [
            "dwarf" => new Dwarf(),
            "elf"=> new Elf(),
            "hobbit" => new Hobbit(),
            "maiar" => new Maiar(),
            "men" => new Men(),
            "orc" => new Orc()
        ];

        $this->chars = [
            "gandalf" => new Gandalf()
        ];
    }

    /**
     * Entry point of the controller. Default method
     *
     * @return void
     * @version 0.1
     * @throws \Framework\Lib\Exceptions\ViewNotFoundException
     */
    public function index(){

        $name = $_POST['name'];

        $_SESSION['name'] = $name;

        $data = [
            "races" => $this->races
        ];

        View::render('race_choice', $data);

    }

    /**
     *
     * @throws \Framework\Lib\Exceptions\ViewNotFoundException
     */
    public function chosechar() {

        $race = strtolower($_POST['race']);

        $race_characters = array_filter($this->chars, function($elem) use($race){
           return $elem->getRace()->getName() === $race;
        });

        $data = ["characters" => $race_characters];

        View::render("char_choice", $data);

    }
}