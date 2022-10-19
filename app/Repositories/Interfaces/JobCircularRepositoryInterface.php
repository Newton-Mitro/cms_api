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
 * @description    :  Job circular interface 
 *========================================================================**/

interface JobCircularRepositoryInterface {
    public function all();
    public function show($jobCircularId);
    public function store($request);
    public function update($request, $jobCircularId);
    public function destroy($jobCircularId);
}
