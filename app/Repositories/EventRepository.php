<?php

namespace App\Repositories;

use App\Models\Event;
use App\Repositories\Interfaces\EventRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  18-10-2022
 * @description    :  
 *========================================================================**/

class EventRepository implements EventRepositoryInterface {

    public function all() {
        return Event::paginate(10);
    }

    public function store($request) {
        $event = new Event();
        $event->event_title = $request->eventTitle;
        $event->event_date = $request->eventDate;
        $event->event_details = $request->eventDetails;
        $event->event_image = base64_decode($request->eventImage, false);
        $event->save();
        return $event;
    }

    public function  update($request,  $eventId) {
        $event = Event::findOrFail($eventId);
        $event->event_title = $request->eventTitle;
        $event->event_date = $request->eventDate;
        $event->event_details = $request->eventDetails;
        $event->event_image = base64_decode($request->eventImage, false);
        $event->update();
        return $event;
    }

    public function show($eventId) {
        return Event::findOrFail($eventId);
    }

    public function destroy($eventId) {
        return Event::findOrFail($eventId)->delete();
    }
}
