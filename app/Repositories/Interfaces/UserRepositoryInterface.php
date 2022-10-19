<?php

namespace App\Repositories\Interfaces;


/**========================================================================
 * ?                                ABOUT
 * @author         :  Newton Mitro
 * @email          :  newtonmitro@gmail.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  19-10-2022
 * @description    :  User Repository Interface
 *========================================================================**/

interface UserRepositoryInterface {
    public function all();
    public function store($request);
    public function update($request,  $userId);
    public function destroy($userId);
    public function show($userId);
}
