<?php

namespace App\Http\Resources\JobHistory;

use Illuminate\Http\Resources\Json\JsonResource;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : Job apply applicant job history  resource.
 *========================================================================**/

class JobHistoryResource extends JsonResource {

    public function toArray($request) {
        return [
            'organizationName'  => $this->organization_name,
            'designation'       => $this->designation,
            'responsibilities'  => $this->responsibilities,
            'reasonForLeaving'  => $this->resignation_for_leaving,
            'salary'            => $this->salary,
            'applicantId'       => $this->applicant_id,
        ];
    }
}
