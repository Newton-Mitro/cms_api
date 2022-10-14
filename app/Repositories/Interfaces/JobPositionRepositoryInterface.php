<?php

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Job position interface.
 *========================================================================**/


namespace App\Repositories\Interfaces;

use App\Models\JobPosition;
use App\Http\Requests\UpdateJobPositionRequest;





interface JobPositionRepositoryInterface
{

    public function all();

    public function show($jobPosition);

    public function store($request);

    public function update(UpdateJobPositionRequest $request, JobPosition $jobPosition);

    public function destroy($jobPosition);
}
