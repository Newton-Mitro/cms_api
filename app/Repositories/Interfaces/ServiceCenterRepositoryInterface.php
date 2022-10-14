<?php

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Service Center Repository Interface
 *========================================================================**/

namespace App\Repositories\Interfaces;

use App\Http\Requests\UpdateServiceCenterRequest;

interface ServiceCenterRepositoryInterface
{

    public function all();

    public function store($request);

    public function  update(UpdateServiceCenterRequest $request, $serviceCenter);

    public function destroy($serviceCenter);

    public function show($serviceCenter);
}
