<?php

namespace System\Helper;

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

class Parameters
{
    private $params = [];

    /**
     * Returns the parameters from the URI as an array
     *
     * @param  int $mode 
     * * mode = 0 -> Returns an indexed array with all parameters 
     * * mode = 1 -> Returns an associative array from the passed parameters. 
     * The first parameter is the key and the second parameter is the value, etc. 
     * If the number of parameters is odd, the last parameter will be removed.
     * 
     * @return array
     */
    public function getParameters($mode = 0): array
    {
        $this->createParameters();
        $this->removeEmptyParameters();
        $this->sortArray();

        if ($mode === 1) {
            $this->pairParameters();
        }

        return $this->params;
    }

    /**
     * Extracts the parameters from the URI
     *
     * @return void
     */
    private function createParameters()
    {
        global $container;

        $router = $container->loadSystem('Router');

        $pathInfo = $router->getPathInfo();
        $controller = $router->getController();
        $method = $router->getMethod();

        $array = explode('/', $pathInfo);

        $controller = str_replace('App\\Controller\\', '', $controller);
        $controllerArray = explode('\\', $controller);

        foreach ($controllerArray as $key => $value) {
            $posController = array_search($value, $array);
            unset($array[$posController]);
        }

        $posMethod = array_search($method, $array);
        unset($array[$posMethod]);

        $this->params = $array;
    }

    /**
     * Removes empty parameters
     *
     * @return void
     */
    private function removeEmptyParameters()
    {
        while (array_search('', $this->params)) {
            $pos = array_search('', $this->params);
            unset($this->params[$pos]);
        }
    }

    /**
     * Sorts the parameters
     *
     * @return void
     */
    private function sortArray()
    {
        $array = [];

        foreach ($this->params as $key => $value) {
            $array[] = $value;
        }

        $this->params = $array;
    }

    /**
     * Creates an associative array from the passed parameters
     * If the number of parameters is odd, the last parameter is removed.
     *
     * @return void
     */
    private function pairParameters()
    {
        $count = count($this->params);

        if ($count === 0 or $count === 1) {
            $this->params = [];
            return;
        }

        $array = [];

        $modulo = $count % 2;
        $count = ($count -  $modulo) / 2;

        $counter = 0;

        for ($i = 0; $i < $count; $i++) {
            $array[$this->params[$counter]] = $this->params[$counter + 1];
            $counter = $counter + 2;
        }

        $this->params = $array;
    }
}
