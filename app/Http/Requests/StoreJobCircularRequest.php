<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @updatedBy      : Newton Mitro
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @description    : User store request information validation.
 *========================================================================**/

class StoreJobCircularRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'JobPositionId' => 'required',
            'TotalNumberVacancy' => 'required',
            'JobResponsibility' => 'required',
            'EmploymentStatus' => 'required',
            'EducationalRequirement' => 'required',
            'ExperienceRequirements' => 'required',
            'AdditionalRequirements' => 'required',
            'Salary' => 'required',
            'CompensationAndOtherBenefits' => 'required',
            'ApplicationDeadline' => 'required',
            'PublishedDate' => 'required',
        ];
    }
}
