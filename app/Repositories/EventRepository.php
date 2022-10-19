<?php

namespace App\Repositories;

use App\Models\Event;
use App\Http\Requests\UpdateEventRequest;
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
        $event->title = $request->Title;
        $event->event_date = $request->EventDate;
        $event->content = $request->Content;
        $event->image = base64_decode($request->Image, false);
        $event->save();
        return $event;
    }

    public function  update($request,  $eventId) {
        $event = Event::find($eventId);
        $event->title = $request->Title;
        $event->event_date = $request->EventDate;
        $event->content = $request->Content;
        $event->image = base64_decode($request->Image, false);
        $event->update();
        return $event;
    }

    public function show($eventId) {
        $event = Event::find($eventId);
        return $event;
    }

    public function destroy($eventId) {
        $event = Event::find($eventId);
        return $event->delete();
    }
}
