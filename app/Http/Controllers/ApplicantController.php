<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicantRequest;
use App\Http\Requests\UpdateApplicantRequest;
use App\Models\Applicant;
use App\Repositories\Interfaces\ApplicantRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil 
 * @email          : israful@cccul.com
 * @repo           :  
 * @createdOn      : 10-03-2022 
 * @description    : This Controller handle all user request  
 *========================================================================**/

class ApplicantController extends Controller
{
    private $ApplicantRepository;

    public function __construct(ApplicantRepositoryInterface $ApplicantRepository)
    {
        $this->ApplicantRepository = $ApplicantRepository;
    }

    public function index()
    {
        return $this->ApplicantRepository->all();
    }

    public function store(StoreApplicantRequest $request)
    {
        return $this->ApplicantRepository->store($request);
    }

    public function show(Applicant $applicant)
    {
        return $this->ApplicantRepository->show($applicant);
    }

    public function update(UpdateApplicantRequest $request, Applicant $applicant)
    {
        return $this->ApplicantRepository->update($request, $applicant);
    }

    public function destroy($applicant)
    {
        return $this->ApplicantRepository->destroy($applicant);
    }
}
