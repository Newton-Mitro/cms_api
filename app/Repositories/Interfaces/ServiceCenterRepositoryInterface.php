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
 * @description    :  Service Center Repository Interface
 *========================================================================**/

interface ServiceCenterRepositoryInterface {
    public function all();
    public function store($request);
    public function update($request, $serviceCenterId);
    public function destroy($serviceCenterId);
    public function show($serviceCenterId);
}
