<?php

namespace App\Repositories\Interfaces;

/**------------------------------------------------------------------------
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@gmail.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  18-10-2022
 * @description    :  Menu Repository Interface
 *------------------------------------------------------------------------**/

interface MenuRepositoryInterface {
    public function all();
    public function rootMenus();
    public function store($request);
    public function  update($request,  $menu);
    public function show($menu);
    public function destroy($menu);
}
