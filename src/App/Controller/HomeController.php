<?php

namespace App\Controller;
use Couchbase\View;
use Framework\Viewer;

class HomeController
{

    public function __construct(private Viewer $view)
    {
    }
    public function index()
    {
        echo $this->view->render('home/index', ['title' =>'hello']);
    }

}