<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BookController extends AbstractController
{
    public function getBooks () {
        $books = [
            [
                'id' => 1954348,
                'title' => 'Name1',
                'description' => 'this is book',
                'author' => 'Pushkin'
            ],
            [
                'id' => 1954349,
                'title' => 'Name2',
                'description' => 'this is book',
                'author' => 'Gogol'
            ],
            [
                'id' => 1954342,
                'title' => 'Name2',
                'description' => 'this is book',
                'author' => 'Blok'
            ]
        ];
        return $this->json($books);
    }

    public function getBook ($id) {
        $book = [
            'id' => $id,
            'title' => 'Name2',
            'description' => 'this is book',
            'author' => 'Blok'
        ];
        return $this->json($book);
    }

    public function createBook () {
        return $this->json('Book has been created');
    }

    public function patchBook ($id) {
        return $this->json('Book has been updated');
    }

    public function deleteBook ($id) {
        return $this->json('Book has been deleted');
    }
}
