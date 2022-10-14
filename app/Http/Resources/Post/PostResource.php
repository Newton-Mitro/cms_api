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

class PostResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'postId' => $this->id,
            'postSlug' => $this->post_slug,
            'postImage' => base64_encode($this->post_image),
            'postTitle' => $this->post_title,
            'postContent' => $this->post_content,
            'postTypeId' => $this->post_type_id,
            'links' => [
                new LinkObject("CreatePost", "Create Post", route('posts.store'),"POST"),
                new LinkObject("UpdatePost", "Update Post", route('posts.update', $this->id),"PUT"),
                new LinkObject("DeletePost", "Delete Post", route('posts.destroy', $this->id),"DELETE"),
            ],
        ];
    }
}
