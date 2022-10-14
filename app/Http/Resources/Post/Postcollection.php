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

use App\Utilities\LinkObject;
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
            'links' => [
                new LinkObject("ViewPost", "View Post", route('posts.show', $this->id),"GET"),
                new LinkObject("DeletePost", "Delete Post", route('posts.destroy', $this->id),"DELETE"),
            ],
        ];
    }
}
