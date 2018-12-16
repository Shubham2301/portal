<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EventRepository;

class EventController extends Controller
{

    private $event;

    public function __construct(EventRepository $event)
    {
        $this->event = $event;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eventData = [];

        $eventData['name'] = $request['name'];
        $eventData['description'] = $request['description'];
        $eventData['venue'] = $request['venue'];
        $eventData['modelling_agency_id'] = $request['modelling_agency_id'];

        $this->event->createEvent($eventData);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fetchedEvent =  $this->event->showEvent($id);

        return $fetchedEvent;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $eventData = [];

        $eventData['name'] = $request['name'];
        $eventData['description'] = $request['description'];
        $eventData['venue'] = $request['venue'];
        $eventData['modelling_agency_id'] = $request['modelling_agency_id'];

        $this->event->updateEvent($eventData, $id);

        return "Success";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $event = 
    }
}
