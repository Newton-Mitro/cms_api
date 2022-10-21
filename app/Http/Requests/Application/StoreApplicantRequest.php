<?php

namespace App\Http\Requests\Application;

use Illuminate\Foundation\Http\FormRequest;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 18-10-2022
 * @description    : 
 *========================================================================**/

class StoreApplicantRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'jobCircularId'                     => 'required|numeric',
            'applicantPhoto'                    => 'required',
            'applicantFullName'                 => 'required|max:255',
            'applicantEmail'                    => 'required|email',
            'applicantPhoneNumber'              => 'required|max:25',
            'fatherName'                        => 'required|max:255',
            'motherName'                        => 'required|max:255',
            'presentAddress1'                   => 'required|max:450',
            'presentAddress2'                   => 'required|max:450',
            'presentAddress3'                   => 'required|max:450',
            'permanentAddress1'                 => 'required|max:450',
            'permanentAddress2'                 => 'required|max:450',
            'permanentAddress3'                 => 'required|max:450',
            'bloodGroup'                        => 'required|max:50',
            'dateOfBirth'                       => 'date|before:today',
            'gender'                            => 'required|string|in:Male,Female,Others',
            'religion'                          => 'required',
            'nationality'                       => 'required',
            'maritalStatus'                     => 'required',
            'coverLetter'                       => 'required',
            'expectedSalary'                    => 'required|max:255',

            'educations'                        => 'required|array',
            'educations.*.nameOfDegree'         => 'required|max:255',
            'educations.*.instituteName'        => 'required|max:255',
            'educations.*.major'                => 'required|max:255',
            'educations.*.eductionBoard'        => 'required|max:255',
            'educations.*.result'               => 'required|max:255',
            'educations.*.passingYear'          => 'required|max:255',

            'jobHistories'                      => 'array',
            'jobHistories.*.organizationName'   => 'required|max:255',
            'jobHistories.*.designation'        => 'required|max:255',
            'jobHistories.*.responsibilities'   => 'required',
            'jobHistories.*.reasonForLeaving'   => 'required',
            'jobHistories.*.salary'             => 'required|numeric',

            'trainings'                         => 'array',
            'trainings.*.trainingTitle'         => 'required|max:255',
            'trainings.*.topic'                 => 'required',
            'trainings.*.instituteName'         => 'required|max:255',
            'trainings.*.fromDate'              => 'required|date',
            'trainings.*.toDate'                => 'required|date',
        ];
    }
}
