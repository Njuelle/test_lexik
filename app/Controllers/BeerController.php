<?php

namespace App\Controllers;

use App\Models\Beer;

class BeerController extends Abstracted\Controller
{
    public function getAll($vars)
    {
        //get all beers with orm
        $beers = Beer::all();
        
        //each controllers has a view attribut, 
        //use it to render your template 
        echo $this->view->display('partials/beers.twig', array(
            'beers' => $beers
        ));
    }

    public function getOne($vars)
    {
        //use $vars to get routes query params
        $beer = Beer::find($vars['id']);

        echo $this->view->display('partials/beer.twig', array(
            'beer' => $beer
        ));
    }

    public function test($vars)
    {
        echo $this->view->display('partials/test.twig', array());   
    }
}