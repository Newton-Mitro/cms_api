<?php

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Implements EventRepository
 *========================================================================**/

namespace App\Repositories;

use App\Models\Event;
use App\Http\Requests\UpdateEventRequest;
use App\Http\Resources\Event\EventResource;
use App\Http\Resources\Event\EventCollection;
use App\Repositories\Interfaces\EventRepositoryInterface;


class EventRepository implements EventRepositoryInterface
{

    public function all()
    {
        return EventCollection::collection(Event::all());
    }

    public function store($request)
    {
        $event = new Event();
        $event->title = $request->Title;
        $event->event_date = $request->EventDate;
        $event->content = $request->Content;
        $event->image = base64_decode($request->Image);
        $event->save();
        return response()->json(['message ' => "you are successfully insert event"]);
    }
    public function  update(UpdateEventRequest $request,  $event)
    {
        $event = Event::find($event);
        $event->title = $request->Title;
        $event->event_date = $request->EventDate;
        $event->content = $request->Content;
        $event->image = base64_decode($request->Image);
        $event->update();
        return response()->json(['message ' => "you are successfully update event"]);
    }
    public function show($event)
    {
        return new EventResource(Event::find($event));
    }

    public function destroy($event)
    {
        $event = Event::find($event);
        $event->delete();
        return response()->json(['message ' => "you are successfully delate event"]);
    }
}
