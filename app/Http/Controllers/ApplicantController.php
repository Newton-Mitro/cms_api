<?php

namespace App\Http\Controllers;

use App\Utilities\LinkObject;

use App\Http\Controllers\Controller;
use App\Http\Resources\Applicant\ApplicantResource;
use App\Http\Resources\Applicant\ApplicantCollection;
use App\Http\Requests\Application\StoreApplicantRequest;
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
                new LinkObject("self", "Applications", route('applicants.index'), "GET"),
                new LinkObject("store", "New Application", route('applicants.store'), "POST"),
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

    public function show($applicantId) {
        return response()->json([
            'data'      => new ApplicantResource($this->ApplicantRepository->show($applicantId)),
            'message'   => "Application retrieved successfully",
            'errors'    => null,
        ]);
    }

    public function updateApplicationStatus($applicantId, $statusId) {
        return response()->json([
            'data'      => new ApplicantResource($this->ApplicantRepository->updateApplicationStatus($applicantId, $statusId)),
            'message'   => "Application updated successfully",
            'errors'    => null,
        ]);
    }

    public function destroy($applicantId) {
        $result = $this->ApplicantRepository->destroy($applicantId) ? "Application deleted successfully" : "Application not found or unable to delete applicant";
        return response()->json([
            'data'      => null,
            'message'   => $result,
            'errors'    => null,
        ]);
    }
}
