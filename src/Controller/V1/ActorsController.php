<?php
declare(strict_types=1);
namespace App\Controller\V1;
class ActorsController extends AppController
{
    public function index()
    {
        $actors = $this->Actors->find('all');
        $this->set(compact('actors'));
        $this->viewBuilder()->setOption('serialize', ['actors']);

    }

    public function view($id = null)
    {
        $actor = $this->Actors->get($id, [
            'contain' => ['Films'],
        ]);

        $this->set('actor', $actor);
        $this->viewBuilder()->setOption('serialize', ['actor']);

    }


}


