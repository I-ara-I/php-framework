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

        $form = $this->loadSystem('Form');
        $form->saveInput();
        //$form->clearInput();
        $input = $form->getInput();

        print_r(session_get_cookie_params());

        //print_r($_COOKIE);


        // print_r($input);
        //print_r($_SESSION);

        $view->render($template, $data);
    }
}
