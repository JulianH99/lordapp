<?php


namespace App\Controllers;

use App\Models\Characters\Gandalf;
use App\Models\Races\Dwarf;
use App\Models\Races\Elf;
use App\Models\Races\Hobbit;
use App\Models\Races\Maiar;
use App\Models\Races\Men;
use App\Models\Races\Orc;

use App\Models\Accessories\Weapons\MagicStaff;
use App\Models\Accessories\Weapons\Arc;
use App\Models\Accessories\Weapons\Sword;


use Framework\Helpers\View;
use Framework\Core\BaseController as Controller;


/**
 * Handles the race and character choice, including the 
 * callbacks from the tweaks
 * 
 * @author Julian Barrios
 * @package App\Controllers
 * @uses \Framework\Core\BaseController
 * @version 0.3
 */
class ChoicesController extends Controller {


    /* custom controller attributes */
    private $races = [];
    private $chars = [];
    private $weapons = [];

    /**
     * Generates all the arrays from the attributes
     * 
     * @version 0.3
     */
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
            "gandalf" => new Gandalf(),
            "gandalf1" => new Gandalf()
        ];

        $this->weapons = [
            new MagicStaff(),
            new Sword(),
            new Arc()
        ];
    }

    /**
     * Entry point of the controller. Default method
     *
     * @return void
     * @version 0.1
     * @throws \Framework\Lib\Exceptions\ViewNotFoundException
     * @see \Framework\Helpers\View
     */
    public function index(){

        $data = [
            "races" => $this->races
        ];

        View::render('race_choice', $data);

    }

    /**
     * Gets the chosen race and sends an array of characters
     * to show on the view
     * 
     * @return void
     * @version 0.2
     * @throws \Framework\Lib\Exceptions\ViewNotFoundException
     * @see \Framework\Helpers\View
     */
    public function chooserace() {

        $race = strtolower($_POST['race']);

        /* get characters that have the selected race */
        $race_characters = array_filter($this->chars, function($elem) use($race){
           return $elem->getRace()->getName() === $race;
        });

        $data = [
            "characters" => $race_characters
        ];

        View::render("char_choice", $data);

    }


    /**
     * Loads the character information to pass it to a new view
     *
     * @return void
     * @version 0.1
     * @throws \Framework\Lib\Exceptions\ViewNotFoundException
     * @see Framework\Helpers\View
     */
    public function choosechar() {

        $character = $_POST['character'];
        
        $chosen_character = $this->chars[$character];

        $chosen_character->automatic_configure(); // trigger the automatic configure

        $data = [
            "character" => $chosen_character,
            "weapons" => $this->weapons
        ];

        View::render("show_char", $data);

    }
}