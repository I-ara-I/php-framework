<?php

namespace App\Controller;

use System\Controller;

class Index extends Controller
{
    public function __construct()
    {
        $this->view =  $this->loadSystem('View'); // Makes the view object available to all functions in this class.
    }

    public function index()
    {
        $data = [];

        $data['header'] = 'Welcome';
        $data['msg'] = 'This is an example page. <br> You can see examples of further functions under the following links.';
        $data['siteTitle'] = 'PHP-Framework'; // Sets the page title

        $template = ['snippets/header', 'example/index', 'snippets/footer']; // The template with specification of all elements

        $this->view->render($template, $data); // Renders the page and provides it with the passed parameters
    }
}
