<?php


class PageController {
    public function index()
    {
        require "src/models/Page.php";

        $model = new Page;
        $pages = $model->getData();

        echo '<pre>';
        var_dump($pages);
        echo '</pre>';

        require "views/page_index.php";
    }

}