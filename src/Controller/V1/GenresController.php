<?php
declare(strict_types=1);
namespace App\Controller\V1;
class GenresController extends AppController
{
    public function index()
    {
        $genres = $this->Genres->find('all');
        $this->set(compact('genres'));
        $this->viewBuilder()->setOption('serialize', ['genres']);

    }

    public function view($id = null)
    {
        $genre = $this->Genres->get($id, [
            'contain' => ['Films'],
        ]);

        $this->set('genre', $genre);
        $this->viewBuilder()->setOption('serialize', ['genre']);

    }



}
