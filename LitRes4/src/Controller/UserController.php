<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    public function getUsers () {
        $users = [
            [
                'id' => 1954348,
                'name' => 'Name1',
                'phone' => '1234568932',
            ],
            [
                'id' => 1954349,
                'name' => 'Name2',
                'phone' => '98765432345',
            ],
            [
                'id' => 1954350,
                'name' => 'Name3',
                'phone' => '876868768767',
            ]
        ];
        return $this->json($users);
    }

    public function getUser1 ($id) {
        $user = [
            'id' => $id,
            'name' => 'Name3',
            'phone' => '876868768767',
        ];
        return $this->json($user);
    }

    public function createUser () {
        return $this->json('User has been created');
    }

    public function patchUser ($id) {
        return $this->json('User has been updated');
    }

    public function deleteUser ($id) {
        return $this->json('User has been deleted');
    }
}
