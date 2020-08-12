<?php

namespace App\Controller\Example;

use System\Controller;

class Form extends Controller
{

    public function index()
    {
        $view = $this->loadSystem('View');
        $form = $this->loadSystem('Form');

        $input = $form->getInput();
        $form->saveInput();

        $data['input'] = $input;

        $data['siteTitle'] = 'Form';

        $template = $view->getTemplate('form');

        $view->render($template, $data);
    }
}
