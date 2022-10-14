<?php

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Implements postType interface 
 *========================================================================**/

namespace App\Repositories;

use App\Models\PostType;
use App\Http\Resources\PostType\PostTypeResource;
use App\Http\Resources\PostType\PostTypeCollection;
use App\Repositories\Interfaces\PostTypeRepositoryInterface;


class PostTypeRepository implements PostTypeRepositoryInterface
{

    public function all()
    {

        return PostTypeCollection::collection(PostType::all());
    }
    public function show($postType)
    {
        return new PostTypeResource($postType);
    }
}
