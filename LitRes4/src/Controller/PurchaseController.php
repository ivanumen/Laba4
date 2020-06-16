<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PurchaseController extends AbstractController
{
    public function getPurchasesByUserId ($userId) {
        $book = [
                'id' => 1954348,
                'title' => 'Name1',
                'description' => 'this is book',
                'author' => 'Pushkin'
        ];
        $user = [
            'id' => $userId,
            'name' => 'Name1',
            'phone' => '1234568932',
        ];
        $purchases = [
            [
                'id' => 4534453,
                'user' => $user,
                'book' => $book,
                'createdTime' => new \DateTime('now')
            ],
            [
                'id' => 45344543,
                'user' => $user,
                'book' => $book,
                'createdTime' => new \DateTime('now')
            ]
        ];
        return $this->json($purchases);
    }

    public function getPurchase ($id) {
        $book = [
            'id' => 1954348,
            'title' => 'Name1',
            'description' => 'this is book',
            'author' => 'Pushkin'
        ];
        $user = [
            'id' => 4645756,
            'name' => 'Name1',
            'phone' => '1234568932',
        ];
        $purchase = [

                'id' => $id,
                'user' => $user,
                'book' => $book,
                'createdTime' => new \DateTime('now')
        ];
        return $this->json($purchase);
    }

    public function createPurchase () {
        return $this->json('Purchase has been created');
    }

    public function deletePurchase ($id) {
        return $this->json('Purchase has been deleted');
    }
}
