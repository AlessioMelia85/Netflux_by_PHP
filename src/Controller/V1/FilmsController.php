<?php
declare(strict_types=1);
namespace App\Controller\V1;
class FilmsController extends AppController
{
    public function index()
    {
        $films = $this->Films->find('all');
        $this->set(compact('films'));
        $this->viewBuilder()->setOption('serialize', ['films']);

    }

    public function view($id = null)
    {
        $film = $this->Films->get($id, [
            'contain' => ['Actors', 'Genres'],
        ]);

        $this->set('film', $film);
        $this->viewBuilder()->setOption('serialize', ['film']);

    }


}
