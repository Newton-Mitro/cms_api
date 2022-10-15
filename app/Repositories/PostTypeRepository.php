<?php

namespace App\Repositories;

use App\Models\PostType;
use App\Repositories\Interfaces\PostTypeRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  Implements postType interface 
 *========================================================================**/


class PostTypeRepository implements PostTypeRepositoryInterface {

    public function all() {
        return PostType::all();
    }

    public function show($postType) {
        return $postType;
    }
}
