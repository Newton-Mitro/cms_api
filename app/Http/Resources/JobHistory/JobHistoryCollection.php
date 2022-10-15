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
 * @description    : Job apply applicant job history  resource collection.
 *========================================================================**/

class JobHistoryCollection extends JsonResource {

    public function toArray($request) {
        return [
            'OrganizationName' => $this->organization_name,
            'Designation' => $this->designation,
            'Responsibilities' => $this->responsibilities,
            'ReasonForLeaving' => $this->resignation_for_leaving,
            'Salary' => $this->salary,
        ];
    }
}
