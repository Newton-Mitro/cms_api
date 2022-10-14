<?php

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Event Repository Interface
 *========================================================================**/

namespace App\Repositories\Interfaces;

use App\Http\Requests\UpdateEventRequest;



interface EventRepositoryInterface
{

    public function all();

    public function store($request);

    public function  update(UpdateEventRequest $request,  $event);

    public function destroy($event);

    public function show($event);
}
