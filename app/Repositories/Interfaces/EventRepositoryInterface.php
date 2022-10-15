<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\UpdateEventRequest;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  Event Repository Interface
 *========================================================================**/

interface EventRepositoryInterface {
    public function all();
    public function store($request);
    public function  update(UpdateEventRequest $request,  $event);
    public function destroy($event);
    public function show($event);
}
