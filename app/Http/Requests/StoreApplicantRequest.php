<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : User store request information validation.
 *========================================================================**/

class StoreApplicantRequest extends FormRequest {
    
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'applicant.Image' => 'required',
            'applicant.FullName' => 'required|max:255',
            'applicant.Email' => 'required|email',
            'applicant.PhoneNumber' => 'required|max:25',
            'applicant.EmergencyContact' => 'required|max:25',
            'applicant.FatherName' => 'required|max:255',
            'applicant.MotherName' => 'required|max:255',
            'applicant.SpouseName' => 'required|max:255',
            'applicant.PresentAddress1' => 'required|max:10000',
            'applicant.PresentAddress2' => 'required|max:10000',
            'applicant.PresentAddress3' => 'required|max:10000',
            'applicant.PresentAddress4' => 'required|max:10000',
            'applicant.PermanentAddress1' => 'required|max:10000',
            'applicant.PermanentAddress2' => 'required|max:10000',
            'applicant.PermanentAddress3' => 'required|max:10000',
            'applicant.PermanentAddress4' => 'required|max:10000',
            'applicant.BloodGroup' => 'required|max:200',
            'applicant.DateOfBirth' => 'date_format:Y-m-d|before:today|nullable',
            'applicant.Gender' => 'required|string|in:m,f,o',
            'applicant.Religion' => 'required',
            'applicant.Nationality' => 'required',
            'applicant.MaritalStatus' => 'required',
            'applicant.job_circular_id' => 'required',
            'applicant.ExpectedSalary' => 'required',
            'applicant.Cv' => 'required|max:10000',

            'educations' => 'required|array',
            'educations.*.NameOfDegree' => 'required|max:255',
            'educations.*.InstituteName' => 'required|max:255',
            'educations.*.Major' => 'required|max:255',
            'educations.*.EductionBoard' => 'required|max:255',
            'educations.*.Result' => 'required|max:255',

            'jobHistories' => 'required|array',
            'jobHistories.*.OrganizationName' => 'required|max:255',
            'jobHistories.*.Designation' => 'required|max:255',
            'jobHistories.*.Responsibilities' => 'required|max:255',
            'jobHistories.*.ReasonForLeaving' => 'required|max:255',
            'jobHistories.*.Salary' => 'required|max:255',

            'training' => 'required|array',
            'training.*.TrainingTitle' => 'required|max:255',
            'training.*.NameTopic' => 'required|max:255',
            'training.*.InstituteName' => 'required|max:255',
            'training.*.Year' => 'required|max:255',
            'training.*.Duration' => 'required|max:255',
        ];
    }
}
