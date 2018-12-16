<?php

namespace App\Repositories;

use App\Event;
use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;

class EventRepository extends Repository {
    
    public function model()
    {
        return 'App\Event';
    }


    public function createEvent($eventData)
    {
        $this->create($eventData);

        return;
    }

    public function showEvent($id)
    {
        $event = $this->find($id);

        return $event;

    }

    public function updateEvent($eventData, $id)
    {
        $getEventRecord = $this->find($id);

        $getEventRecord->fill($eventData);
        $getEventRecord->save();

        return $getEventRecord;
    }

    
}