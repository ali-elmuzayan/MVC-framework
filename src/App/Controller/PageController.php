<?php


namespace App\Controller;
use App\Models\Page;

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
        var_dump($id);
    }

}