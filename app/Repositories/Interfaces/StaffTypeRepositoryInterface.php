<?php

namespace App\Repositories\Interfaces;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Newton Mitro
 * @email          :  newtonmitro@gmail.com
 * @repo           :  
 * @createdOn      :  20-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  20-10-2022
 * @description    :  Staff Type Repository Interface
 *========================================================================**/

interface StaffTypeRepositoryInterface {
    public function all();
    public function store($request);
    public function show($staffId);
    public function update($request,  $staffId);
    public function destroy($staffId);
}
