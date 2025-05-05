<?php

namespace App\Controllers;

class BaseController
{
    /**
     * Render a view file and pass data
     */
    public function view($view, $data = [])
    {
        extract($data);
        require __DIR__ . '/../Views/' . $view . '.php';
    }
}
