<?php

namespace App\Http\Resources\Eduction;

use Illuminate\Http\Resources\Json\JsonResource;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : Job apply applicant Eduction resource collection.
 *========================================================================**/

class EductionCollection extends JsonResource {

    public function toArray($request) {
        return [
            'nameOfDegree'  => $this->name_of_degree,
            'instituteName' => $this->institute_name,
            'major'         => $this->major,
            'eductionBoard' => $this->board,
            'result'        => $this->result,
            'passingYear'   => $this->passing_year,
        ];
    }
}
