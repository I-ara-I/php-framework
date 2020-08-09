<?php

namespace App\Config;

class TemplateMap
{

    public $map = [];

    public function __construct()
    {
        $this->map = [
            'home' => ['snippets/header', 'index', 'snippets/footer'],
        ];
    }
}
