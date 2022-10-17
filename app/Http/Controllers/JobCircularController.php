<?php

namespace App\Http\Controllers;

use App\Models\JobCircular;
use App\Http\Requests\StoreJobCircularRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\UpdateJobCircularRequest;
use App\Http\Resources\JobCircular\JobCircularResource;
use App\Http\Resources\JobCircular\JobCircularCollection;
use App\Repositories\Interfaces\JobCircularRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil 
 * @email          : israful@cccul.com
 * @repo           :  
 * @createdOn      : 10-03-2022 
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 17-10-2022
 * @description    : This Controller handle all user request  
 *========================================================================**/

class JobCircularController extends Controller {

    private $JobCircularRepository;

    public function __construct(JobCircularRepositoryInterface $JobCircularRepository) {
        $this->JobCircularRepository = $JobCircularRepository;
    }

    public function index() {
        return JobCircularCollection::collection($this->JobCircularRepository->all());
    }

    public function store(StoreJobCircularRequest $request) {
        return new JobCircularResource($this->JobCircularRepository->store($request));
    }

    public function show(JobCircular $jobCircular) {
        return  new JobCircularResource($this->JobCircularRepository->show($jobCircular));
    }

    public function update(UpdateJobCircularRequest $request, JobCircular $jobCircular) {
        $result = $this->JobCircularRepository->update($request,  $jobCircular);
        if ($result) {
            return response()->json([
                "data" => $result,
                "message" => "Job circular updated successfully",
                'errors' => null,
            ]);
        }
    }

    public function destroy(JobCircular $jobCircular) {
        if ($this->JobCircularRepository->destroy($jobCircular)) {
            return response()->json([
                "data" => null,
                "message" => "Job circular deleted successfully",
                'errors' => null,
            ]);
        }
    }
}
