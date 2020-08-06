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

class Router
{
    private const CONTROLLER_PATH = 'App\\Controller\\';
    private $pathInfo;
    private $controller;
    private $method;

    public function run()
    {
        $this->createController();
        $this->createMethod();
        $this->loadController();
    }

    /**
     * Determines the required controller from the URI
     *
     * @return void
     */
    private function createController()
    {
        global $container;
        $config = $container->loadConfig('Config');

        $this->pathInfo = $_SERVER['PATH_INFO'];
        $this->pathInfo = ltrim($this->pathInfo, '/');

        if (!$this->pathInfo) {
            $this->controller = self::CONTROLLER_PATH . $config->defaultController;
            return;
        }

        $controller = self::CONTROLLER_PATH . $this->pathInfo;
        $controller = str_replace('/', '\\', $controller);;

        while (!class_exists($controller) && $controller !== '') {
            $pos = strrpos($controller, '\\');
            $controller = substr($controller, 0, $pos);
        }

        if (!$controller) {
            $this->controller = self::CONTROLLER_PATH . $config->default404Controller;
        } else {
            $this->controller = $controller;
        }
    }

    /**
     * Determines the required method from the URI
     *
     * @return void
     */
    private function createMethod()
    {
        global $container;
        $config = $container->loadConfig('Config');

        $controller = str_replace(self::CONTROLLER_PATH, '', $this->controller);
        $controller = str_replace('\\', '/', $controller);
        $method = str_replace($controller . '/', '', $this->pathInfo);

        while (!method_exists($this->controller, $method) && $method !== '') {
            $pos = strrpos($method, '/');
            $method = substr($method, 0, $pos);
        }

        if (str_replace(self::CONTROLLER_PATH, '', $this->controller) === $config->default404Controller) {
            if (method_exists($this->controller, $config->default404Method)) {
                $this->method = $config->default404Method;
                return;
            }
        }

        if (!$method and $config->defaultMethodActivated == true) {
            $this->method = $config->defaultMethod;
        } else {
            $this->method = $method;
        }
    }

    /**
     * Calls the specified controller and method
     *
     * @return void
     */
    private function loadController()
    {
        if (class_exists($this->controller)) {
            $controller =  new $this->controller;
            $method = $this->method;
            $controller->$method();
        }
    }

    /**
     * getPathInfo
     *
     * @return string
     */
    public function getPathInfo(): string
    {
        return $this->pathInfo;
    }

    /**
     * getController
     *
     * @return string
     */
    public function getController(): string
    {
        return $this->controller;
    }

    /**
     * getMethod
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
}
