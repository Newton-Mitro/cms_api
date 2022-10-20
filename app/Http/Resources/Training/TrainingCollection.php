<?php

namespace App\Http\Resources\Training;

use Illuminate\Http\Resources\Json\JsonResource;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           : 
 * @createdOn      : 3-10-2022 
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : Training Collection resource
 *========================================================================**/

class TrainingCollection extends JsonResource {

    public function toArray($request) {
        return [
            'TrainingTitle' => $this->training_title,
            'NameTopic'     => $this->topic,
            'InstituteName' => $this->institute_name,
            'fromDate'      => $this->from_date,
            'toDate'        => $this->to_date,
            'applicantId'   => $this->applicant_id,
        ];
    }
}
