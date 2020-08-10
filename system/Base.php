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
     * Returns the  called system object from the container
     *
     * @param  string $className
     * @return object|boolean
     */
    protected function loadSystem(string $className)
    {
        global $container;

        return $container->loadSystem($className);
    }

    /**
     * Returns the called model object from the container
     *
     * @param  string $model
     * @return object
     */
    protected function loadModel(string $className): object
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
