<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Group;

class UserController extends Abstracted\Controller
{
    public function getAllUsers()
    {
        $users = User::all();

        foreach ($users as $user) {
            $user->setOwnGroup();
        }
        echo $this->view->display('partials/users.twig', array(
            'users' => $users
        ));
    }

    public function newUserForm()
    {
        $groups = Group::all();
        echo $this->view->display('partials/new_user_modal.twig', array(
            'groups' => $groups
        ));
    }    

    public function addUser()
    {
        $posts = $this->request->getParsedBody();
        $user = new User();
        $user->nom        = $posts['nom'];
        $user->prenom     = $posts['prenom'];
        $user->email      = $posts['email'];
        $user->birth_date = $posts['birth_date'];
        $user->group_id   = $posts['groupe'];

        $user->save();
        header('Location: /');

    }

    public function deleteUser($vars)
    {
        User::find($vars['id'])->delete();
        header('Location: /');
    }

    public function massDelete($vars)
    {
        $user_ids = explode(',', $this->request->getQueryParams()['ids']);
        User::destroy($user_ids);
        header('Location: /');
    }

    public function showUserDetails($vars)
    {
        $user = User::find($vars['id']);
        echo $this->view->display('partials/details_user_modal.twig', array(
            'user' => $user
        ));
    }
}