<?php

namespace App\Repositories;

use App\Models\JobCircular;
use App\Repositories\Interfaces\JobCircularRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  18-10-2022
 * @description    :  
 *========================================================================**/

class JobCircularRepository implements JobCircularRepositoryInterface {

    public function all() {
        return JobCircular::paginate(10);
    }

    public function show($jobCircularId) {
        $jobCircular = JobCircular::find($jobCircularId);
        return $jobCircular;
    }

    public function store($request) {
        $jobCircular = new JobCircular();
        $jobCircular->job_position = $request->jobPosition;
        $jobCircular->vacancy = $request->totalNumberVacancy;
        $jobCircular->job_responsibility = $request->jobResponsibility;
        $jobCircular->employment_status = $request->employmentStatus;
        $jobCircular->educational_requirement = $request->educationalRequirement;
        $jobCircular->experience_requirements = $request->experienceRequirements;
        $jobCircular->additional_requirements = $request->additionalRequirements;
        $jobCircular->salary = $request->salary;
        $jobCircular->compensation_and_benefits = $request->compensationAndOtherBenefits;
        $jobCircular->application_deadline = $request->applicationDeadline;
        $jobCircular->published_on = $request->publishedDate;
        $jobCircular->save();
        return $jobCircular;
    }

    public function update($request, $jobCircularId) {
        $jobCircular = JobCircular::find($jobCircularId);
        $jobCircular->job_position = $request->jobPosition;
        $jobCircular->vacancy = $request->totalNumberVacancy;
        $jobCircular->job_responsibility = $request->jobResponsibility;
        $jobCircular->employment_status = $request->employmentStatus;
        $jobCircular->educational_requirement = $request->educationalRequirement;
        $jobCircular->experience_requirements = $request->experienceRequirements;
        $jobCircular->additional_requirements = $request->additionalRequirements;
        $jobCircular->salary = $request->salary;
        $jobCircular->compensation_and_benefits = $request->compensationAndOtherBenefits;
        $jobCircular->application_deadline = $request->applicationDeadline;
        $jobCircular->published_on = $request->publishedDate;
        $jobCircular->update();
        return $jobCircular;
    }

    public function destroy($jobCircularId) {
        $jobCircular = JobCircular::find($jobCircularId);
        return $jobCircular->delete();
    }
}
