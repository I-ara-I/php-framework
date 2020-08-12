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

class Form
{
    /**
     * Returns the values from the global variable $_POST and the stored values from the function `Form::saveInput()` as array.
     *
     * @return array
     */
    public function getInput(): array
    {
        $data = [];

        if (isset($_SESSION['FORMPOST'])) {
            foreach ($_SESSION['FORMPOST'] as $key => $value) {
                $data[$key] = $value;
            }
        }

        if (!empty($_POST)) {
            foreach ($_POST as $key => $value) {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    /**
     * Saves the values of the global variable $_POST in the current session.
     *
     * @return boolean
     */
    public function saveInput(): bool
    {
        foreach ($_POST as $key => $value) {
            $_SESSION['FORMPOST'][$key] = $value;
        }

        return true;
    }


    /**
     * Deletes the saved values of the global variable $_POST in the current session.
     *
     * @return bool
     */
    public function unsetInput(): bool
    {
        unset($_SESSION['FORMPOST']);
        return true;
    }
}
