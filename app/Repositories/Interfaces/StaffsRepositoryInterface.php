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
 * @description    :  Management Executive Repository Interface
 *========================================================================**/

interface StaffsRepositoryInterface {
    public function all();
    public function store($request);
    public function show($managementExecutives);
    public function update($request,  $managementExecutives);
    public function destroy($staff);
}
