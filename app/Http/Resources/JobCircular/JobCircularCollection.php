<?php

namespace App\Http\Resources\JobCircular;

use App\Utilities\LinkObject;
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
            'jobCircularId'                 => $this->id,
            'jobPosition'                   => $this->job_position_id,
            'totalNumberVacancy'            => $this->vacancy,
            'jobResponsibility'             => $this->job_responsibility,
            'employmentStatus'              => $this->employment_status,
            'educationalRequirement'        => $this->educational_requirement,
            'experienceRequirements'        => $this->experience_requirements,
            'additionalRequirements'        => $this->additional_requirements,
            'salary'                        => $this->salary,
            'compensationAndOtherBenefits'  => $this->compensation_and_benefits,
            'applicationDeadline'           => $this->application_deadline,
            'publishedDate'                 => $this->published_on,
            'links'                         => [
                new LinkObject("show", "View Job Circular", route('job-circulars.show', $this->id), "GET"),
                new LinkObject("update", "Update Job Circular", route('job-circulars.update', $this->id), "PUT"),
                new LinkObject("destroy", "Delete Job Circular", route('job-circulars.destroy', $this->id), "DELETE"),
            ],
        ];
    }
}
