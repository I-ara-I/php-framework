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

class Base
{


    /**
     * Returns the parameters from the URI
     *
     * @param  mixed $mode
     * * @param  int $mode 
     * * mode = 0 -> Returns an indexed array with all parameters 
     * * mode = 1 -> Returns an associative array from the passed parameters. 
     * The first parameter is the key and the second parameter is the value, etc. 
     * If the number of parameters is odd, the last parameter will be removed.
     * @return array
     */

    /*
    protected function getParameter($mode = 0): array
    {
        global $container;
        $parameter = $container->loadSystem('Parameter');

        $params = $parameter->getParameter($mode);

        return $params;
    }
    */

    /**
     * Returns the  called system object from the container
     *
     * @param  mixed $value
     * @return object
     */
    protected function loadSystem($className): object
    {
        global $container;

        return $container->loadSystem($className);
    }

    /**
     * Returns the called model object from the container
     *
     * @param  mixed $model
     * @return object
     */
    protected function loadModel($className): object
    {
        global $container;
        $model = $container->loadModel($className);
        return $model;
    }

    /**
     * Returns the URL from the config file
     *
     * @return string
     */
    protected function getUrl(): string
    {
        global $container;
        $config = $container->loadConfig('Config');
        return $config->url;
    }
}
