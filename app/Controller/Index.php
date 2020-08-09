<?php

namespace App\Controller;

use System\Controller;

class Index extends Controller
{
    public function index()
    {
        $data = [];

        $data['msg'] = 'Hello World!';
        $data['siteTitle'] = 'PHP-Framework';

        $view = $this->loadSystem('View');
        $template = $view->getTemplate('home');

        $view->render($template, $data);
    }
}
