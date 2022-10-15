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
 * @UpdatedAt      :  15-10-2022
 * @description    :  Implements EventRepository
 *========================================================================**/

class EventRepository implements EventRepositoryInterface {

    public function all() {
        return Event::all();
    }

    public function store($request) {
        $event = new Event();
        $event->title = $request->Title;
        $event->event_date = $request->EventDate;
        $event->content = $request->Content;
        $event->image = base64_decode($request->Image);
        return $event->save();
    }

    public function  update(UpdateEventRequest $request,  $event) {
        $event = Event::find($event);
        $event->title = $request->Title;
        $event->event_date = $request->EventDate;
        $event->content = $request->Content;
        $event->image = base64_decode($request->Image);
        return $event->update();
    }

    public function show($event) {
        return Event::find($event);
    }

    public function destroy($event) {
        $event = Event::find($event);
        $event->delete();
    }
}
