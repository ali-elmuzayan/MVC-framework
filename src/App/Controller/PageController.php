<?php


namespace App\Controller;
use App\Models\Page;
use Framework\Viewer;

class PageController
{
    public function __construct(private Viewer $viewer, private Page $page) {}

    public function index()
    {

        $pages = $this->page->getData();


        $title = 'index page';
        echo $this->viewer->render('includes/header', ['title' => $title]);
        echo $this->viewer->render('page/index', ['pages' => $pages]);
    }

    public function show(string $id) {
        $view = new Viewer();
        echo $this->viewer->render('includes/header', ['title' => 'show pages']);
        echo $this->viewer->render('page/show', ['id' => $id]);
    }

}