<?php

namespace app\controllers;

use app\database\Filters;
use app\database\models\Sale;
use Exception;
use League\Plates\Engine;

abstract class Controller
{
    protected function view(string $view, array $data = [])
    {
        $viewPath = "./app/views/{$view}.php";
        if(!file_exists($viewPath)){
            throw new Exception("A view ({$view}) não existe");
        }

        $templates = new Engine('./app/views');

        // $templates->addData(['lastSales' => $lastSales]);
        echo $templates->render(
            $view,
            $data
        );
    }
}
