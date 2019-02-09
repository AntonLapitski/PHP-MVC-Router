<?php

namespace App\Controllers;

class Example extends Controller
{
    public static function helloWorld()
    {
        echo 'Hello World. I\'m from Example class.';
        echo '<br>' . parent::sayHello();
    }

    public static function showArgs($myName)
    {
        echo 'I received the following arguments:';
        echo '<pre>';
        print_r(func_get_arg(0));
        echo '</pre>';
    }
}