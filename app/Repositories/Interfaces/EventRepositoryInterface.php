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
 * @description    :  Event Repository Interface
 *========================================================================**/

interface EventRepositoryInterface {
    public function all();
    public function store($request);
    public function update($request,  $event);
    public function destroy($event);
    public function show($event);
}
