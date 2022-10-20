<?php

namespace App\Http\Resources\Applicant;

use App\Utilities\LinkObject;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Resources\Json\JsonResource;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : Job apply applicant resource 
 *========================================================================**/

class ApplicantResource extends JsonResource {

    public function toArray($request) {
        return [
            'applicantId'                   => $this->id,
            'applicantPhoto'                => base64_encode($this->applicant_photo),
            // 'applicantPhoto'                => base64_encode(Storage::get(str_replace("storage", "public", $this->applicant_photo))),
            'applicantFullName'             => $this->applicant_name,
            'applicantEmail'                => $this->applicant_email,
            'applicantPhoneNumber'          => $this->applicant_phone_number,
            'applicantEmergencyContact'     => $this->applicant_emergency_contact,
            'fatherName'                    => $this->father_name,
            'motherName'                    => $this->mother_name,
            'spouseName'                    => $this->spouse_name,
            'presentAddress1'               => $this->present_address_1,
            'presentAddress2'               => $this->present_address_2,
            'presentAddress3'               => $this->present_address_3,
            'presentAddress4'               => $this->present_address_4,
            'permanentAddress1'             => $this->permanent_address_1,
            'permanentAddress2'             => $this->permanent_address_2,
            'permanentAddress3'             => $this->permanent_address_3,
            'permanentAddress4'             => $this->permanent_address_4,
            'bloodGroup'                    => $this->blood_group,
            'dateOfBirth'                   => $this->date_of_birth,
            'gender'                        => $this->gender,
            'religion'                      => $this->religion,
            'nationality'                   => $this->nationality,
            'maritalStatus'                 => $this->marital_status,
            'attachedResume'                => base64_encode($this->attached_resume),
            // 'attachedResume'                => base64_encode(Storage::get(str_replace("storage", "public", $this->attached_resume))),
            'coverLetter'                   => $this->cover_letter,
            'expectedSalary'                => $this->expected_salary,
            'educations'                    => $this->educations,
            'jobHistories'                  => $this->jobHistories,
            'trainings'                     => $this->trainings,
            'links'                         => [
                new LinkObject("index", "Applications", route('applicants.index'), "GET"),
                new LinkObject("update", "Select For Interview", route('applicants.update', $this->id), "PATCH"),
                new LinkObject("update", "Reject Application", route('applicants.update', $this->id), "PATCH"),
                new LinkObject("update", "Call For Interview", route('applicants.update', $this->id), "PATCH"),
                new LinkObject("destroy", "Delete Application", route('applicants.destroy', $this->id), "DELETE"),
            ],
        ];
    }
}
