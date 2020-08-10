<?php

namespace App\Controller\Example;

use System\Controller;

class Parameters extends Controller
{
    public function index()
    {
        $data = [];

        $parameters = $this->loadSystem('Parameters');

        $data['params1'] = $parameters->getParameters(); // Parameters as indexed array
        $data['params2'] = $parameters->getParameters(1); // Parameters as assiociative array

        $data['siteTitle'] = 'Parameters';
        $data['header'] = 'Parameters';

        $view = $this->loadSystem('View');

        $template = $view->getTemplate('parameters');  // The template is loaded from the file 'Config\TemplateMap'.

        $view->render($template, $data);
    }
}
