<?php

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Implements jobcircular interface
 *========================================================================**/

namespace App\Repositories;


use App\Models\JobCircular;
use App\Http\Resources\JobCircular\JobCircularResource;
use App\Http\Resources\JobCircular\JobCircularCollection;
use App\Repositories\Interfaces\JobCircularRepositoryInterface;



class JobCircularRepository implements JobCircularRepositoryInterface
{

    public function all()
    {

        return JobCircularCollection::collection(JobCircular::all());
    }

    public function show($jobCircular)
    {
        return new JobCircularResource($jobCircular);
    }

    public function store($request)
    {

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

        $jobCircular->save();

        return response()->json(['message ' => "You are sucessfully insrat JobCircular  post"]);
    }

    public function update($request, $jobCircular)
    {

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

        $jobCircular->update();

        return response()->json(['message ' => "You are sucessfully insrat JobCircular  Update"]);
    }

    public function destroy($jobCircular)
    {

        $jobCircular = JobCircular::find($jobCircular->id);

        $jobCircular->delete();

        return response()->json(['message ' => "you are sucessfully delate jobCircular post"]);
    }
}
