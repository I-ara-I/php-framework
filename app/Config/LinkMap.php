<?php

namespace App\Config;

class LinkMap
{
    /**
     * Here you can define links which can be called by the function View::getLink(string $name)
     *
     * Two parameters are required: the link and true or false.
     * true: For internal links. The base URL is automatically added.
     * false: For external links
     * 
     * Example:
     * 'admin' => ['dashboard/admin', true]
     * 'git' => ['https://github.com/I-ara-I/php-framework', false]
     */
    public $map = [
        'form' => ['example/form', true], // Link serves as an example and can be deleted.
        'git' => ['https://github.com/I-ara-I/php-framework', false], // Link serves as an example and can be deleted.
    ];
}
