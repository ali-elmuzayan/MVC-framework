<?php

namespace Framework;

class Viewer
{

    public function render(string $view, array $data = []) :string
    {
        extract($data, EXTR_SKIP);

        ob_start();

        require 'views/' . $view . '.php';

        return ob_get_clean();
    }


}