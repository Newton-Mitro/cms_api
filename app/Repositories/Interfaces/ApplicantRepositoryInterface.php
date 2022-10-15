<?php

namespace App\Repositories\Interfaces;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Applicant repository interface
 *========================================================================**/

interface ApplicantRepositoryInterface {
    public function all();
    public function store($request);
    public function destroy($applicant);
    public function show($applicant);
}
