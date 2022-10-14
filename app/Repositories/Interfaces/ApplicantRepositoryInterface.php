<?php

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Applicant repository interface
 *========================================================================**/

namespace App\Repositories\Interfaces;

use App\Models\Applicant;
use App\Http\Requests\UpdateApplicantRequest;


interface ApplicantRepositoryInterface
{

    public function all();

    public function store($request);

    public function  update(UpdateApplicantRequest $request, Applicant $applicant);

    public function destroy($applicant);

    public function show($applicant);
}
