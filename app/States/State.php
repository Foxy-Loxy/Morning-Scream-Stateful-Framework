<?php
/**
 * Created by PhpStorm.
 * User: kavramenko
 * Date: 7/16/2018
 * Time: 2:29 PM
 */

namespace App\States;


use App\User;
use Telegram\Bot\Keyboard\Keyboard;

abstract class State
{
    protected $name;

    protected $user;

    protected $keyboards = array();

    protected $accepts;

    protected $data;

    public function __construct(User $user, Array $data){
        $this->user = $user;
        $this->validate($data);
    }

    protected function validate(Array $data){

    }

    protected function addKeyboard(Keyboard $keyboard, string $keyboardName){

    }
    /*
    *   User-defined state run scenario
    */
    abstract public function run();

}