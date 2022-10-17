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
            'jobCircularId'                    => 'required',
            'applicantPhoto'                    => 'required',
            'applicantFullName'                 => 'required|max:255',
            'applicantEmail'                    => 'required|email',
            'applicantPhoneNumber'              => 'required|max:25',
            'applicantEmergencyContact'         => 'required|max:25',
            'fatherName'                        => 'required|max:255',
            'motherName'                        => 'required|max:255',
            'spouseName'                        => 'required|max:255',
            'presentAddress1'                   => 'required|max:10000',
            'presentAddress2'                   => 'required|max:10000',
            'presentAddress3'                   => 'required|max:10000',
            'presentAddress4'                   => 'required|max:10000',
            'permanentAddress1'                 => 'required|max:10000',
            'permanentAddress2'                 => 'required|max:10000',
            'permanentAddress3'                 => 'required|max:10000',
            'permanentAddress4'                 => 'required|max:10000',
            'bloodGroup'                        => 'required|max:200',
            'dateOfBirth'                       => 'date_format:Y-m-d|before:today|nullable',
            'gender'                            => 'required|string|in:m,f,o',
            'religion'                          => 'required',
            'nationality'                       => 'required',
            'maritalStatus'                     => 'required',
            'attachedResume'                    => 'required',
            'coverLetter'                       => 'required',
            'expectedSalary'                    => 'required|max:10000',

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
            'jobHistories.*.responsibilities'   => 'required|max:255',
            'jobHistories.*.reasonForLeaving'   => 'required|max:255',
            'jobHistories.*.salary'             => 'required|max:255',

            'trainings'                          => 'array',
            'trainings.*.trainingTitle'          => 'required|max:255',
            'trainings.*.topic'                  => 'required|max:255',
            'trainings.*.instituteName'          => 'required|max:255',
            'trainings.*.fromDate'               => 'required|max:255',
            'trainings.*.toDate'                 => 'required|max:255',
        ];
    }
}
