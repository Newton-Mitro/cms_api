<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Http\Requests\StoreApplicantRequest;
use App\Http\Requests\UpdateApplicantRequest;
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
 * @UpdatedAt      : 15-10-2022
 * @description    : This Controller handle all user request  
 *========================================================================**/

class ApplicantController extends Controller {

    private $ApplicantRepository;

    public function __construct(ApplicantRepositoryInterface $ApplicantRepository) {
        $this->ApplicantRepository = $ApplicantRepository;
    }

    public function index() {
        return ApplicantCollection::collection($this->ApplicantRepository->all());
    }

    public function store(StoreApplicantRequest $request) {
        return new ApplicantResource($this->ApplicantRepository->store($request));
    }

    public function show(Applicant $applicant) {
        return new ApplicantResource($this->ApplicantRepository->show($applicant));
    }

    public function updateApplicationStatus($application_id, $status_id) {
        $result = $this->ApplicantRepository->updateApplicationStatus($application_id, $status_id);
        if ($result) {
            return response()->json([
                "data" => $result,
                "message" => "Application updated successfully",
                'errors' => null,
            ]);
        }
    }

    public function destroy($applicant) {
        if ($this->ApplicantRepository->destroy($applicant)) {
            return response()->json([
                "data" => null,
                "message" => "Applicant deleted successfully",
                'errors' => null,
            ]);
        }
    }
}
