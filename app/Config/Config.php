<?php

namespace App\Config;

class Config
{
    /**
     * What is the status of the page?
     * * Options: development or production
     * 
     * Important: If the app is live, only use the production mode!
     * No error messages are displayed in production mode!
     */
    public $mode = 'development';

    /**
     * Please enter the complete URL here.
     * This must refer to the index.php in the public folder!
     *
     * For local development use the following URL:
     * http://localhost/php-framework/public/index.php/
     */
    public $url = 'http://localhost/php-framework/public/index.php/';

    /**
     * Should the default method be called
     * if no other method can be determined?
     */
    public $defaultMethodActivated = true;

    /**
     * Which controller and method should be called as standard?
     */
    public $defaultController = 'Index';
    public $defaultMethod = 'index';

    /**
     * Which controller and method should be called if the page is not found / 404 ERROR ?
     */
    public $default404Controller = 'NotFound';
    public $default404Method = 'index';
}
