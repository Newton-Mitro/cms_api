<?php

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Implements post interface
 *========================================================================**/

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Support\Str;
use App\Http\Resources\Post\PostResource;
use App\Http\Resources\Post\PostCollection;
use App\Repositories\Interfaces\PostRepositoryInterface;


class PostRepository implements PostRepositoryInterface
{

    public function all()
    {
        return PostCollection::collection(Post::all());
    }
    public function show($post)
    {
        return new PostResource($post);
    }
    public function store($request)
    {
        $post = new Post();
        $post->post_slug = Str::slug($post->title, '-');
        $post->post_image = base64_decode($request->PostImage);
        $post->post_title = $request->PostTitle;
        $post->post_content = $request->PostContent;
        $post->post_type_id = $request->PostTypeId;
        $post->save();

        return response()->json(['message ' => "you are successfully store post"]);
    }
    public function update($request, $post)
    {
        $post = Post::find($post->id);
        $post->post_slug = Str::slug($post->title, '-');
        $post->post_image = base64_decode($request->PostImage);
        $post->post_title = $request->Post_Title;
        $post->post_content = $request->Post_Content;
        $post->post_type_id = $request->Post_Type_id;
        $post->update();

        return response()->json(['message' => 'You are successfully Update']);
    }
    public function destroy($post)
    {
        $post = Post::find($post->id);
        $post->delete();

        return response()->json(['message ' => "you are successfully delate post"]);
    }
}
