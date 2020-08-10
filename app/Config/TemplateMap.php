<?php

namespace App\Config;

class TemplateMap
{

    /**
     * Here you can store construction instructions for templates. 
     * 
     * EXAMPLE 
     * * 'home' => ['snippets/header', 'index', 'snippets/footer']
     * * These can be called with View::getTemplate('home').
     */
    public $map = [
        'home' => ['snippets/header', 'index', 'snippets/footer'],
    ];
}
