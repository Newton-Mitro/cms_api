<?php

/**------------------------------------------------------------------------
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@gmail.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Menu Repository Interface
 *------------------------------------------------------------------------**/

namespace App\Repositories\Interfaces;

interface MenuRepositoryInterface
{
    public function all();
    public function store($request);
    public function show($menu);
}
