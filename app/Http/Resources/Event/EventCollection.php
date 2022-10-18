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

class EventCollection extends JsonResource {

    public function toArray($request) {
        return [
            'Id'        => $this->id,
            'Title'     => $this->title,
            'EventDate' => $this->event_date,
            'Content'   => $this->content,
        ];
    }
}
