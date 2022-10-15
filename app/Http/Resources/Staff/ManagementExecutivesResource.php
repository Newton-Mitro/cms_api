<?php

namespace App\Http\Resources\ManagementExecutives;

use Illuminate\Http\Resources\Json\JsonResource;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : job circular resource collection.
 *========================================================================**/

class ManagementExecutivesResource extends JsonResource {

    public function toArray($request) {
        return [
            'id' => $this->id,
            'Image' => base64_encode($this->image),
            'Name' => $this->name,
            'Designation' => $this->designation,
            'Content' => $this->content,
        ];
    }
}
