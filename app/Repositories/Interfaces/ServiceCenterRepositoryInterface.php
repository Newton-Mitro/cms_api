<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\UpdateServiceCenterRequest;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  Service Center Repository Interface
 *========================================================================**/

interface ServiceCenterRepositoryInterface {
    public function all();
    public function store($request);
    public function update(UpdateServiceCenterRequest $request, $serviceCenter);
    public function destroy($serviceCenter);
    public function show($serviceCenter);
}
