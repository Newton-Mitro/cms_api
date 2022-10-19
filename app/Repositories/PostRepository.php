<?php

namespace App\Repositories;

use App\Models\Post;
use App\Models\PostType;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Interfaces\PostRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  18-10-2022
 * @description    :  
 *========================================================================**/

class PostRepository implements PostRepositoryInterface {

    public function all() {
        return Post::paginate(10);
    }

    public function getPostsByPostType($post_type_name) {
        $postType = PostType::where('post_type_name', $post_type_name)->first();
        return Post::where('post_type_id', $postType->id)->paginate(10);
    }

    public function show($postId) {
        $post = Post::find($postId);
        return $post;
    }

    public function getPostByPostSlug($post_slug) {
        return Post::where('post_slug', $post_slug)->get()->first();
    }

    public function store($request) {
        $post = new Post();
        // $filePath =  'public/images/post/' . date_timestamp_get(date_create()) . '.jpg';
        // Storage::disk('local')->put($filePath, base64_decode($request->postImage, false));
        $post->post_slug = Str::slug($request->postTitle, '-');
        // $post->post_image = Storage::url($filePath);
        $post->post_image = base64_decode($request->postImage, false);
        $post->post_icon = $request->postIcon;
        $post->post_title = $request->postTitle;
        $post->post_content = $request->postContent;
        $post->post_type_id = $request->postTypeId;
        $post->save();
        return $post;
    }

    public function update($request, $postId) {

        $post = Post::find($postId);
        // $filePath =  'public/images/post/' . date_timestamp_get(date_create()) . '.jpg';
        // Storage::disk('local')->put($filePath, base64_decode($request->postImage, false));
        $post->post_slug = Str::slug($request->postTitle, '-');
        $post->post_image =  base64_decode($request->postImage, false);
        // $post->post_image =  Storage::url($filePath);
        $post->post_icon = $request->postIcon;
        $post->post_title = $request->postTitle;
        $post->post_content = $request->postContent;
        $post->post_type_id = $request->postTypeId;
        $post->update();
        return $post;
    }

    public function destroy($postId) {
        $post = Post::find($postId);
        return $post->delete();
    }
}
