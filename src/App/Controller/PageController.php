<?php


namespace App\Controller;
use App\Models\Page;
use Framework\Viewer;

class PageController
{
    public function index()
    {

        $model = new Page;
        $pages = $model->getData();

        echo '<pre>';
        var_dump($pages);
        echo '</pre>';

        require "views/page_index.php";
    }

    public function show(string $id) {
        $view = new Viewer();
        echo $view->render('includes/header', ['title' => 'show pages']);
        echo $view->render('page/show', ['id' => $id]);
    }

}