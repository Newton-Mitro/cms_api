<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Utilities\LinkObject;
use App\Http\Requests\StoreApplicantRequest;
use App\Http\Resources\Applicant\ApplicantResource;
use App\Http\Resources\Applicant\ApplicantCollection;
use App\Repositories\Interfaces\ApplicantRepositoryInterface;

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

class ApplicantController extends Controller {

    private $ApplicantRepository;

    public function __construct(ApplicantRepositoryInterface $ApplicantRepository) {
        $this->ApplicantRepository = $ApplicantRepository;
    }

    public function index() {
        return ApplicantCollection::collection($this->ApplicantRepository->all())->additional([
            'error'     => null,
            'message'   => "Applications retrieved successfully.",
            'links'     => [
                new LinkObject("Self", "All", route('applicants.index'), "GET"),
                new LinkObject("Store", "New Application", route('applicants.store'), "POST"),
            ]
        ]);
    }

    public function store(StoreApplicantRequest $request) {
        return response()->json([
            'data'      => new ApplicantResource($this->ApplicantRepository->store($request)),
            'message'   => "Application created successfully",
            'errors'    => null,
        ]);
    }

    public function show(Applicant $applicant) {
        return response()->json([
            'data'      => new ApplicantResource($this->ApplicantRepository->show($applicant)),
            'message'   => "Application retrieved successfully",
            'errors'    => null,
        ]);
    }

    public function updateApplicationStatus($application_id, $status_id) {
        return response()->json([
            'data' => new ApplicantResource($this->ApplicantRepository->updateApplicationStatus($application_id, $status_id)),
            'message' => "Application updated successfully",
            'errors' => null,
        ]);
    }

    public function destroy($applicant) {
        return response()->json([
            'data' => $this->ApplicantRepository->destroy($applicant),
            'message' => "Applicant deleted successfully",
            'errors' => null,
        ]);
    }
}
