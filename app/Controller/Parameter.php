<?php

namespace App\Controller;

use System\Controller;

class Parameter extends Controller
{

    public function index()
    {
        $paramter = $this->loadSystem('Paramters');

        $params = $paramter->getParameters(1);

        var_dump($params);
    }
}
