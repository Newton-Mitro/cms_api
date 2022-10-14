<?php

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @description    : Post  resource collection.
 *========================================================================**/

namespace App\Http\Resources\Post;

use Illuminate\Http\Resources\Json\JsonResource;


class PostCollection extends JsonResource
{

    public function toArray($request)
    {
        return [
            'postSlug' => $this->post_slug,
            'postTitle' => $this->post_title,
            'postContent' => $this->post_content,
            'postTypeId' => $this->post_type_id,
        ];
    }
}
