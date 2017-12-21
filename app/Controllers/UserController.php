<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends Abstracted\Controller
{
    public function getAll($vars)
    {
        //get all beers with orm
        $users = User::all();
        
        //each controllers has a view attribut, 
        //use it to render your template 
        echo $this->view->display('partials/users.twig', array(
            'users' => $users
        ));
    }
}