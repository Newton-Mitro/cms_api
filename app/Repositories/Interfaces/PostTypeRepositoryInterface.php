<?php

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Post Type interface
 *========================================================================**/
namespace App\Repositories\Interfaces;

Interface PostTypeRepositoryInterface{
    public function all();
    
    public function show($postType);
}
