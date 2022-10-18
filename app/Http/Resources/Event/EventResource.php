<?php

namespace App\Http\Resources\Event;

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
            'id'        => $this->id,
            'Title'     => $this->title,
            'EventDate' => $this->event_date,
            'Content'   => $this->content,
            'Image'     => base64_encode($this->image),
        ];
    }
}
