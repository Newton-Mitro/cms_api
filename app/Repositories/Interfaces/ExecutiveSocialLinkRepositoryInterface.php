<?php

/**------------------------------------------------------------------------
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@gmail.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Executive Social Link Repository Interface
 *------------------------------------------------------------------------**/

namespace App\Repositories\Interfaces;

interface ExecutiveSocialLinkRepositoryInterface
{
    public function all();
    public function store($request);
    public function show($executiveSocialLink);
    public function destroy($executiveSocialLink);
}
