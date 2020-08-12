<?php

namespace System;

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

class View extends Base
{
    /**
     * Calls the view files
     *
     * * If an array is passed, every file contained in it will be rendered and return true.
     * Otherwise false will be returned.
     * 
     * @param  array $template File name and path without file extension. 
     * @param  array $data Data will be extracted. This allows the individual keys to be accessed as variables in the view file.
     * @return boolean
     */
    public function render($template, array $data = []): bool
    {
        $path = '../app/View/';

        if ($data) {
            extract($data);
        }

        if (is_array($template)) {
            foreach ($template as $key => $value) {
                require_once($path . $value . '.php');
            }
            return true;
        }
        return false;
    }

    /**
     * Returns the defined template from the file Config\TemplateMap.php
     * 
     * @param  string $template
     * @return array|boolean
     */
    public function getTemplate(string $template)
    {

        global $container;
        $templateMap = $container->loadConfig('TemplateMap');

        if (isset($templateMap->map[$template])) {
            return $templateMap->map[$template];
        }

        return false;
    }

    /**
     * Returns the link as string from the class `Config\LinkMap`.
     *
     * @param  string $name
     * @return string|bool
     */
    public function getLink(string $name)
    {
        global $container;
        $config = $container->loadConfig('Config');
        $linkMap = $container->loadConfig('LinkMap');

        if (array_key_exists($name, $linkMap->map)) {
            if ($linkMap->map[$name][1]) {
                return $config->url . $linkMap->map[$name][0];
            } elseif (!$linkMap->map[$name][1]) {
                return $linkMap->map[$name][0];
            }
        }
        return false;
    }

    /**
     * Appends the base URL to the passed string and returns it.
     *
     * @param  string $link
     * @return string
     */
    public function createLink(string $link): string
    {
        global $container;
        $config = $container->loadConfig('Config');

        return $config->url . $link;
    }
}
