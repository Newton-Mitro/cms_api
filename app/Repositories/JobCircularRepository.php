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
 * @UpdatedAt      :  15-10-2022
 * @description    :  Implements job circular interface
 *========================================================================**/

class JobCircularRepository implements JobCircularRepositoryInterface {

    public function all() {
        return JobCircular::all();
    }

    public function show($jobCircular) {
        return $jobCircular;
    }

    public function store($request) {
        $jobCircular = new JobCircular();
        $jobCircular->job_position_id = $request->JobPositionId;
        $jobCircular->vacancy = $request->TotalNumberVacancy;
        $jobCircular->job_responsibility = $request->JobResponsibility;
        $jobCircular->employment_status = $request->EmploymentStatus;
        $jobCircular->educational_requirement = $request->EducationalRequirement;
        $jobCircular->experience_requirements = $request->ExperienceRequirements;
        $jobCircular->additional_requirements = $request->AdditionalRequirements;
        $jobCircular->salary = $request->Salary;
        $jobCircular->compensation_and_benefits = $request->CompensationAndOtherBenefits;
        $jobCircular->application_deadline = $request->ApplicationDeadline;
        $jobCircular->published_on = $request->PublishedDate;
        return $jobCircular->save();
    }

    public function update($request, $jobCircular) {
        $jobCircular = JobCircular::find($jobCircular->id);
        $jobCircular->job_position_id = $request->JobPositionId;
        $jobCircular->vacancy = $request->TotalNumberVacancy;
        $jobCircular->job_responsibility = $request->JobResponsibility;
        $jobCircular->employment_status = $request->EmploymentStatus;
        $jobCircular->educational_requirement = $request->EducationalRequirement;
        $jobCircular->experience_requirements = $request->ExperienceRequirements;
        $jobCircular->additional_requirements = $request->AdditionalRequirements;
        $jobCircular->salary = $request->Salary;
        $jobCircular->compensation_and_benefits = $request->CompensationAndOtherBenefits;
        $jobCircular->application_deadline = $request->ApplicationDeadline;
        $jobCircular->published_on = $request->PublishedDate;
        return $jobCircular->update();
    }

    public function destroy($jobCircular) {
        $jobCircular = JobCircular::find($jobCircular->id);
        $jobCircular->delete();
    }
}
