<?php

namespace App\Http\Resources\Event;

use App\Utilities\LinkObject;
use Illuminate\Http\Resources\Json\JsonResource;

/**========================================================================
 * ?                                ABOUT
 * @author         : Isrfil
 * @email          : israfil@cccul.com
 * @repo           : 
 * @createdOn      : 03-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : Application stage seeder
 *========================================================================**/

class EventCollection extends JsonResource {

    public function toArray($request) {
        return [
            'eventId'        => $this->id,
            'eventTitle'     => $this->event_title,
            'eventDate'      => $this->event_date,
            'eventDetails'   => $this->event_details,
            'links'         => [
                new LinkObject("show", "View Event", route('events.show', $this->id), "GET"),
                new LinkObject("update", "Update Event", route('events.update', $this->id), "PUT"),
                new LinkObject("delete", "Delete Event", route('events.destroy', $this->id), "DELETE"),
            ],
        ];
    }
}
