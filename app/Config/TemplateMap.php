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
        'parameters' => ['snippets/header', 'example/parameters', 'snippets/footer'], // Template serves as an example and can be deleted.
    ];
}
