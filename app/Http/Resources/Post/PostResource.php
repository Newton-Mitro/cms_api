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

class PostResource extends JsonResource {

    public function toArray($request) {
        return [
            'postId'        => $this->id,
            'postSlug'      => $this->post_slug,
            'postImage'     => base64_encode($this->post_image),
            'postIcon'      => $this->post_icon,
            'postTitle'     => $this->post_title,
            'postContent'   => $this->post_content,
            'postTypeId'    => $this->post_type_id,
            'links'         => [
                new LinkObject("PostResource", "Create Post", route('posts.store'), "POST"),
                new LinkObject("PostResource", "Update Post", route('posts.update', $this->id), "PUT"),
                new LinkObject("PostResource", "Delete Post", route('posts.destroy', $this->id), "DELETE"),
            ],
        ];
    }
}
