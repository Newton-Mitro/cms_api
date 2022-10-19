<?php

namespace App\Http\Controllers;

use App\Utilities\LinkObject;

use App\Http\Controllers\Controller;
use App\Http\Resources\Event\EventResource;
use App\Http\Resources\Event\EventCollection;
use App\Http\Requests\Event\StoreEventRequest;
use App\Http\Requests\Event\UpdateEventRequest;
use App\Repositories\Interfaces\EventRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         : Isrfil
 * @email          : israfil@cccul.com
 * @repo           : 
 * @createdOn      : 03-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 18-10-2022
 * @description    : 
 *========================================================================**/

class EventController extends Controller {

    private $EventRepository;

    public function __construct(EventRepositoryInterface $EventRepository) {
        $this->EventRepository = $EventRepository;
    }

    public function index() {
        return EventCollection::collection($this->EventRepository->all())->additional([
            'error'     => null,
            'message'   => "Events retrieved successfully.",
            'links'     => [
                new LinkObject("Self", "All", route('events.index'), "GET"),
                new LinkObject("Store", "New Event", route('events.store'), "POST"),
            ]
        ]);
    }

    public function store(StoreEventRequest $request) {
        return response()->json([
            'data'      => new EventResource($this->EventRepository->store($request)),
            'message'   => "Event created successfully",
            'errors'    => null,
        ]);
    }

    public function show($eventId) {
        return response()->json([
            'data'      => new EventResource($this->EventRepository->show($eventId)),
            'message'   => "Event retrieved successfully",
            'errors'    => null,
        ]);
    }

    public function update(UpdateEventRequest $request,  $eventId) {
        return response()->json([
            'data' => new EventResource($this->EventRepository->update($request,  $eventId)),
            'message' => "Event updated successfully",
            'errors' => null,
        ]);
    }

    public function destroy($eventId) {
        return response()->json([
            'data' => $this->EventRepository->destroy($eventId),
            'message' => "Event deleted successfully",
            'errors' => null,
        ]);
    }
}
