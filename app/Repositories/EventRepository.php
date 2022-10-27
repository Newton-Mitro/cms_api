<?php

namespace App\Repositories;

use App\Models\Event;
use Illuminate\Support\Facades\Storage;
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
        $filePath =  'public/images/post/' . date_timestamp_get(date_create()) . '.jpg';
        Storage::disk('local')->put($filePath, base64_decode($request->eventImage, false));
        $event->event_image = Storage::url($filePath);
        $event->event_title = $request->eventTitle;
        $event->event_date = $request->eventDate;
        $event->event_details = $request->eventDetails;
        $event->save();
        return $event;
    }

    public function  update($request,  $eventId) {
        $event = Event::findOrFail($eventId);
        $filePath =  'public/images/post/' . date_timestamp_get(date_create()) . '.jpg';
        Storage::disk('local')->put($filePath, base64_decode($request->eventImage, false));
        $event->event_image = Storage::url($filePath);
        $event->event_title = $request->eventTitle;
        $event->event_date = $request->eventDate;
        $event->event_details = $request->eventDetails;
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
