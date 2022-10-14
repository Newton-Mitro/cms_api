<?php

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil 
 * @email          : israful@cccul.com
 * @repo           :  
 * @createdOn      : 10-03-2022 
 * @description    : This Controller handle all user request  
 *========================================================================**/

namespace App\Http\Controllers;

use App\Models\JobPosition;
use App\Http\Requests\StoreJobPositionRequest;
use App\Http\Requests\UpdateJobPositionRequest;
use App\Repositories\Interfaces\JobPositionRepositoryInterface;

class JobPositionController extends Controller
{

    private $jobPositionRepository;

    public function __construct(JobPositionRepositoryInterface $jobPositionRepository)
    {
        $this->jobPositionRepository = $jobPositionRepository;
    }

    public function index()
    {
        return $this->jobPositionRepository->all();
    }

    public function store(StoreJobPositionRequest $request)
    {
        return $this->jobPositionRepository->store($request);
    }

    public function show(JobPosition $jobPosition)
    {
        return  $this->jobPositionRepository->show($jobPosition);
    }

    public function update(UpdateJobPositionRequest $request, JobPosition $jobPosition)
    {
        return $this->jobPositionRepository->update($request, $jobPosition);
    }

    public function destroy(JobPosition $jobPosition)
    {
        return $this->jobPositionRepository->destroy($jobPosition);
    }
}
