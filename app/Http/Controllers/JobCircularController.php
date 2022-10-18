<?php

namespace App\Http\Controllers;

use App\Models\JobCircular;
use App\Utilities\LinkObject;

use App\Http\Controllers\Controller;
use App\Http\Resources\JobCircular\JobCircularResource;
use App\Http\Resources\JobCircular\JobCircularCollection;
use App\Http\Requests\JobCircular\StoreJobCircularRequest;
use App\Http\Requests\JobCircular\UpdateJobCircularRequest;
use App\Repositories\Interfaces\JobCircularRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil 
 * @email          : israful@cccul.com
 * @repo           :  
 * @createdOn      : 10-03-2022 
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 18-10-2022
 * @description    : 
 *========================================================================**/

class JobCircularController extends Controller {

    private $JobCircularRepository;

    public function __construct(JobCircularRepositoryInterface $JobCircularRepository) {
        $this->JobCircularRepository = $JobCircularRepository;
    }

    public function index() {
        return JobCircularCollection::collection($this->JobCircularRepository->all())->additional([
            'error'     => null,
            'message'   => "Job circulars retrieved successfully.",
            'links'     => [
                new LinkObject("Self", "All", route('job-circulars.index'), "GET"),
                new LinkObject("Store", "New Job Circular", route('job-circulars.store'), "POST"),
            ]
        ]);
    }

    public function store(StoreJobCircularRequest $request) {
        return response()->json([
            'data'      => new JobCircularResource($this->JobCircularRepository->store($request)),
            'message'   => "Job circular created successfully",
            'errors'    => null,
        ]);
    }

    public function show(JobCircular $jobCircular) {
        return response()->json([
            'data'      => new JobCircularResource($this->JobCircularRepository->show($jobCircular)),
            'message'   => "Job circular retrieved successfully",
            'errors'    => null,
        ]);
    }

    public function update(UpdateJobCircularRequest $request, JobCircular $jobCircular) {
        return response()->json([
            "data" => $this->JobCircularRepository->update($request,  $jobCircular),
            "message" => "Job circular updated successfully",
            'errors' => null,
        ]);
    }

    public function destroy(JobCircular $jobCircular) {
        return response()->json([
            "data" => $this->JobCircularRepository->destroy($jobCircular),
            "message" => "Job circular deleted successfully",
            'errors' => null,
        ]);
    }
}
