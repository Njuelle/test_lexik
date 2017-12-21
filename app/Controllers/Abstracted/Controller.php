<?php

namespace App\Controllers\Abstracted;

abstract class Controller
{
    protected $request;
    protected $view;

    public function __construct($request, $twigLoader) 
    {
        $this->request = $request;
        $this->view = $twigLoader;
    }
}