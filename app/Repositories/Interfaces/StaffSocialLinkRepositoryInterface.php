<?php

namespace App\Repositories\Interfaces;

/**------------------------------------------------------------------------
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@gmail.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  Executive Social Link Repository Interface
 *------------------------------------------------------------------------**/

interface StaffSocialLinkRepositoryInterface {
    public function all();
    public function store($request);
    public function show($staffSocialLink);
    public function destroy($staffSocialLink);
}
