<?php

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @description    : Job apply applicant resource collection.
 *========================================================================**/

namespace App\Http\Resources\Applicant;

use Illuminate\Http\Resources\Json\JsonResource;

class ApplicantCollection extends JsonResource
{

    public function toArray($request)
    {
        return [
            'Id' => $this->id,
            'Image' => base64_encode($this->image),
            'FullName' => $this->name,
            'Email' => $this->email,
            'PhoneNumber' => $this->phone_number,
            'EmergencyContact' => $this->emergency_contact,
            'FatherName' => $this->father_name,
            'MotherName' => $this->mother_name,
            'SpouseName' => $this->spouse_name,
            'PresentAddress1' => $this->present_address_1,
            'PresentAddress2' => $this->present_address_2,
            'PresentAddress3' => $this->present_address_3,
            'PresentAddress4' => $this->present_address_4,
            'PermanentAddress1' => $this->permanent_address_1,
            'PermanentAddress2' => $this->permanent_address_2,
            'PermanentAddress3' => $this->permanent_address_3,
            'PermanentAddress4' => $this->permanent_address_4,
            'BloodGroup' => $this->blood_group,
            'DateOfBirth' => $this->date_of_birth,
            'Gender' => $this->gender,
            'Religion' => $this->religion,
            'Nationality' => $this->nationality,
            'MaritalStatus' => $this->marital_status,
            'ExpectedSalary' => $this->expected_salary,
            'Cv' => $this->cv,
            'href' => [
                'ViewEduction' => route('eductions.show', $this->id),
                'ViewTraining' => route('trainings.show', $this->id),
                'ViewJobHistory' => route('jobhistories.show', $this->id),

            ],
        ];
    }
}
