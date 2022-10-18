<?php

namespace App\Http\Resources\Applicant;

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
 * @description    : Job apply applicant resource collection.
 *========================================================================**/

class ApplicantCollection extends JsonResource {

    public function toArray($request) {
        return [
            'applicantId'                   => $this->id,
            'applicantFullName'             => $this->applicant_name,
            'applicantEmail'                => $this->applicant_email,
            'applicantPhoneNumber'          => $this->applicant_phone_number,
            'applicantEmergencyContact'     => $this->applicant_emergency_contact,
            'presentAddress'                => $this->present_address_1 . ', ' . $this->present_address_2 . ', ' . $this->present_address_3 . ', ' . $this->present_address_4,
            'permanentAddress'              => $this->permanent_address_1 . ', ' . $this->permanent_address_2 . ', ' . $this->permanent_address_3 . ', ' . $this->permanent_address_4,
            'bloodGroup'                    => $this->blood_group,
            'dateOfBirth'                   => $this->date_of_birth,
            'gender'                        => $this->gender,
            'religion'                      => $this->religion,
            'maritalStatus'                 => $this->marital_status,
            'jobCircularId'                 => $this->job_circular_id,
            'expectedSalary'                => $this->expected_salary,
            'links'                         => [
                new LinkObject("ApplicantResource", "View Applicant", route('applicants.show', $this->id), "GET"),
                new LinkObject("ApplicantResource", "Delete Applicant", route('applicants.destroy', $this->id), "DELETE"),
            ],
        ];
    }
}
