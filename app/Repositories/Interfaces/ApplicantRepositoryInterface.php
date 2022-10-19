<?php

namespace App\Repositories\Interfaces;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  18-10-2022
 * @description    :  Applicant repository interface
 *========================================================================**/

interface ApplicantRepositoryInterface {
    public function all();
    public function store($request);
    public function updateApplicationStatus($application_id, $status_id);
    public function destroy($application_id);
    public function show($application_id);
}
