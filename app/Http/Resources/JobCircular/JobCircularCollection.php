<?php

namespace App\Http\Resources\JobCircular;

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

class JobCircularCollection extends JsonResource {

    public function toArray($request) {
        return [
            'JobCircularPostId' => $this->id,
            'JobPositionId' => $this->job_position_id,
            'TotalNumberVacancy' => $this->vacancy,
            'JobResponsibility' => $this->job_responsibility,
            'EmploymentStatus' => $this->employment_status,
            'EducationalRequirement' => $this->educational_requirement,
            'ExperienceRequirements' => $this->experience_requirements,
            'AdditionalRequirements' => $this->additional_requirements,
            'Salary' => $this->salary,
            'CompensationAndOtherBenefits' => $this->compensation_and_benefits,
            'ApplicationDeadline' => $this->application_deadline,
            'PublishedDate' => $this->published_on,
        ];
    }
}
