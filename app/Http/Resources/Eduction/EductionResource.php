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
 * @description    : Job apply applicant Eduction resource .
 *========================================================================**/

class EductionResource extends JsonResource {

    public function toArray($request) {
        return [
            'NameOfDegree'  => $this->name_of_degree,
            'InstituteName' => $this->institute_name,
            'Major'         => $this->major,
            'EductionBoard' => $this->board,
            'Result'        => $this->result,
        ];
    }
}
