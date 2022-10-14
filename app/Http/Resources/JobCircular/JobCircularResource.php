<?php

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @description    : jobcircular resource.
 *========================================================================**/

namespace App\Http\Resources\JobCircular;

use Illuminate\Http\Resources\Json\JsonResource;

class JobCircularResource extends JsonResource
{

    public function toArray($request)
    {
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
