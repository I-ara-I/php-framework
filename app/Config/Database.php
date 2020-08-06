<?php

namespace App\Config;

class Database
{
    /**
     *Should the database connection be created automatically when a model is loaded?
     *If set to true, this can be called up with: $this->pdo
     */
    public $loadPdo = true;

    /**
     *Data for the database connection
     */
    public $default = [
        'host' => "localhost",
        'dbName' => "framework",
        'user' => "root",
        'password' => ""
    ];
}
