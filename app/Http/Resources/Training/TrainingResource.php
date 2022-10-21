<?php

namespace App\Http\Resources\Training;

use Illuminate\Http\Resources\Json\JsonResource;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           : 
 * @createdOn      : 03-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : Training resource  
 *========================================================================**/

class TrainingResource extends JsonResource {

    public function toArray($request) {
        return [
            'trainingTitle' => $this->training_title,
            'nameTopic'     => $this->topic,
            'instituteName' => $this->institute_name,
            'fromDate'      => $this->from_date,
            'toDate'        => $this->to_date,
            'applicantId'   => $this->applicant_id,
        ];
    }
}
