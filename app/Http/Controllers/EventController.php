<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Repositories\Interfaces\EventRepositoryInterface;

class EventController extends Controller
{

    private $EventRepository;

    public function __construct(EventRepositoryInterface $EventRepository)
    {
        $this->EventRepository = $EventRepository;
    }


    public function index()
    {
        return $this->EventRepository->all();
    }
    public function create()
    {
        //
    }

    public function store(StoreEventRequest $request)
    {
        return $this->EventRepository->store($request);
    }

    public function show($event)
    {
        return $this->EventRepository->show($event);
    }


    public function edit(Event $event)
    {
        //
    }

    public function update(UpdateEventRequest $request,  $event)
    {
        return $this->EventRepository->update($request,  $event);
    }
    public function destroy($event)
    {
        return $this->EventRepository->destroy($event);
    }
}
