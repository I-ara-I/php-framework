<?php

/** 
 * MIT License
 *
 * Copyright (c) 2020 Arthur Koser
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE. 
 */

namespace System;

use PDO;
use PDOException;

class Container
{
    private const SYSTEM_PATH = 'System\\';
    private const CONFIG_PATH = 'App\\Config\\';
    private const MODEL_PATH = 'App\\Model\\';
    private $objects = [];
    private $map = [];

    /**
     * The main function. These trigger all further steps to load the page.
     *
     * @return void
     */
    public function run()
    {
        $this->createMap();
        $this->objects['System\Router'] = new Router;
        $this->objects['System\Router']->run();
    }

    /**
     * Creates the map of the system classes
     *
     * @return void
     */
    private function createMap()
    {
        $this->map = [
            'Router' => 'Router',
            'View' => 'View',
            'Parameters' => 'Helper\Parameters',
            'Form' => 'Helper\Form',
        ];
    }

    /**
     * Creates or loads the called system object
     *
     * @param  string $class
     * @return object|boolean
     */
    public function loadSystem(string $className)
    {
        if ($this->map[$className]) {
            $class = self::SYSTEM_PATH . $this->map[$className];

            if (isset($this->objects[$class])) {
                return $this->objects[$class];
            } else {
                $object = new $class;
                $this->objects[$class] = $object;
                return $this->objects[$class];
            }
        } else {
            return false;
        }
    }

    /**
     * Creates or loads the called config object
     *
     * @param  string $class
     * @return object
     */
    public function loadConfig(string $class): object
    {
        $class = self::CONFIG_PATH . $class;

        if (isset($this->objects[$class])) {
            return $this->objects[$class];
        } else {
            $object = new $class;
            $this->objects[$class] = $object;
            return $this->objects[$class];
        }
    }

    /**
     * Creates or loads the called model object
     *
     * @param  string $class
     * @return object
     */
    public function loadModel(string $class): object
    {
        $database = $this->loadConfig('Database');

        $class = self::MODEL_PATH . $class;

        if (isset($this->objects[$class])) {
            return $this->objects[$class];
        } else {
            $object = new $class;

            if ($database->loadPdo) {
                $object->loadPDO();
            }

            $this->objects[$class] = $object;
            return $this->objects[$class];
        }
    }

    /**
     * Creates the database connection
     *
     * @return object
     */
    public function loadPDO(): object
    {
        $database = $this->loadConfig('Database');

        if (isset($this->objects['PDO'])) {
            return $this->objects['PDO'];
        } else {
            try {
                $pdo =
                    $pdo = new PDO("mysql:host=" . $database->default['host'] . ";dbname=" . $database->default['dbName'], $database->default['user'], $database->default['password']);
            } catch (PDOException $e) {
                echo "Es ist ein Fehler bei der Datenbankverbindung aufgetreten";
                die();
            }
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            $config = $this->loadConfig('Config');

            if ($config->mode === 'development') {
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }

            $this->objects['PDO'] = $pdo;
            return $this->objects['PDO'];
        }
    }

    /**
     * Returns -1 in development mode, otherwise 0.
     *
     * @return int
     */
    public function errorMode(): int
    {
        $config = $this->loadConfig('Config');

        if ($config->mode ===  'development') {
            return -1;
        } else {
            return 0;
        }
    }
}
