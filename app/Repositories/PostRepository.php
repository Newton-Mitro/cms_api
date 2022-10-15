<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Support\Str;
use App\Repositories\Interfaces\PostRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Implements post interface
 *========================================================================**/

class PostRepository implements PostRepositoryInterface {

    public function all() {
        return Post::paginate(
            10, // per page (may be get it from request)
            ['*'], // columns to select from table (default *, means all fields)
            'page', // page name that holds the page number in the query string
            10 // current page, default 1
        );
    }

    public function show($post) {
        return $post;
    }

    public function store($request) {
        $post = new Post();
        $post->post_slug = Str::slug($post->title, '-');
        $post->post_image = base64_decode($request->PostImage);
        $post->post_title = $request->PostTitle;
        $post->post_content = $request->PostContent;
        $post->post_type_id = $request->PostTypeId;
        return  $post->save();
    }

    public function update($request, $post) {
        $post = Post::find($post->id);
        $post->post_slug = Str::slug($post->title, '-');
        $post->post_image = base64_decode($request->PostImage);
        $post->post_title = $request->Post_Title;
        $post->post_content = $request->Post_Content;
        $post->post_type_id = $request->Post_Type_id;
        return $post->update();
    }

    public function destroy($post) {
        $post = Post::find($post->id);
        $post->delete();
    }
}
