<?php

namespace App\Http\Resources\Post;

use App\Utilities\LinkObject;
use Illuminate\Http\Resources\Json\JsonResource;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : Post  resource collection.
 *========================================================================**/

class PostCollection extends JsonResource {

    public function toArray($request) {
        return [
            'postSlug'      => $this->post_slug,
            'postTitle'     => $this->post_title,
            'postIcon'      => $this->post_icon,
            'postContent'   => $this->post_content,
            'postType'      => $this->postType->post_type_name,
            'links'         => [
                new LinkObject("show", "View Post", route('posts.getPostByPostSlug', $this->post_slug), "GET"),
                new LinkObject("update", "Update Post", route('posts.update', $this->id), "PUT"),
                new LinkObject("destroy", "Delete Post", route('posts.destroy', $this->id), "DELETE"),
            ],
        ];
    }
}
