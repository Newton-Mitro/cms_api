<?php

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Implements job_position interface
 *========================================================================**/

namespace App\Repositories;

use App\Models\JobPosition;
use App\Http\Resources\JobPosition\JobPositionResource;
use App\Http\Resources\JobPosition\JobPositionCollection;
use App\Repositories\Interfaces\JobPositionRepositoryInterface;






class JobPositionRepository implements JobPositionRepositoryInterface
{

    public function all()
    {

        return JobPositionCollection::collection(JobPosition::all());
    }
    public function show($jobPosition)
    {
        return new JobPositionResource($jobPosition);
    }
    public function store($request)
    {
        $position = new JobPosition();

        $position->position_name = $request->JobDesignationName;

        $position->save();

        return response()->json(['message ' => "you are sucessfully insrat JobPOsitionName"]);
    }
    public function update($request, $jobPosition)

    {
        $position = JobPosition::find($jobPosition->id);

        $position->position_name = $request->JobDesignationName;

        $position->update();

        return response()->json(['message ' => "you are sucessfully Update JobPOsitionName"]);
    }
    public function destroy($jobPosition)
    {
        $position = JobPosition::find($jobPosition->id);

        $position->delete();

        return response()->json(['message ' => "you are sucessfully delate JobPosition Name"]);
    }
}
