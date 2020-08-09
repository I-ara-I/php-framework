<?php

namespace App\Controller;

use System\Controller;

class Parameter extends Controller
{

    public function index()
    {
        $paramter = $this->loadSystem('Paramter');

        $params = $paramter->getParameter(1);

        var_dump($params);
    }
}
