<?php

namespace App\Repositories\Interfaces;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  Staff Repository Interface
 *========================================================================**/

interface StaffsRepositoryInterface {
    public function all();
    public function getStaffsByType($staffType);
    public function store($request);
    public function show($staffId);
    public function update($request,  $staffId);
    public function destroy($staffId);
}
