<?php 

namespace Source\Controllers;

use Source\Support\Rain;

class WebController
{
    public function index()
    {
        $rain = new Rain();
        $rain->setMainTemplate("index");
    }
}