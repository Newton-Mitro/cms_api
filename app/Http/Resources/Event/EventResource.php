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

class EventResource extends JsonResource {

    public function toArray($request) {
        return [
            'eventId'        => $this->id,
            'eventTitle'     => $this->event_title,
            'eventDate'      => $this->event_date,
            'eventDetails'   => $this->event_details,
            'eventImage'     => base64_encode($this->event_image),
            'links'          => [
                new LinkObject("index", "Events", route('events.index'), "GET"),
                new LinkObject("update", "Update Event", route('events.update', $this->id), "PUT"),
                new LinkObject("destroy", "Delete Event", route('events.destroy', $this->id), "DELETE"),
            ],
        ];
    }
}
