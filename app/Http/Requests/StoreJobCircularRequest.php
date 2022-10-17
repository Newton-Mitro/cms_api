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
 * @UpdatedAt      : 16-10-2022
 * @description    : User store request information validation.
 *========================================================================**/

class StoreJobCircularRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'jobPosition' => 'required',
            'totalNumberVacancy' => 'required',
            'jobResponsibility' => 'required',
            'employmentStatus' => 'required',
            'educationalRequirement' => 'required',
            'experienceRequirements' => 'required',
            'additionalRequirements' => 'required',
            'salary' => 'required',
            'compensationAndOtherBenefits' => 'required',
            'applicationDeadline' => 'required',
            'publishedDate' => 'required',
        ];
    }
}
