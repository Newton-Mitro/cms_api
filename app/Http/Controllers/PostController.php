<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Utilities\LinkObject;
use App\Http\Controllers\Controller;
use App\Http\Resources\Post\PostResource;
use App\Http\Resources\Post\PostCollection;
use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Repositories\Interfaces\PostRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil 
 * @email          : israful@cccul.com
 * @repo           :  
 * @createdOn      : 10-03-2022 
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 18-10-2022
 * @description    : 
 *========================================================================**/

class PostController extends Controller {

    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository) {
        // $this->middleware('auth:api', ['except' => ['getPostsByPostType', 'getPostByPostSlug']]);
        $this->postRepository = $postRepository;
    }

    public function index() {
        return PostCollection::collection($this->postRepository->all())->additional([
            'error'     => null,
            'message'   => "Post retrieved successfully.",
            'links'     => [
                new LinkObject("self", "Posts", route('posts.index'), "GET"),
                new LinkObject("store", "New Post", route('posts.store'), "POST"),
            ]
        ]);
    }

    public function store(StorePostRequest $request) {
        return response()->json([
            'data'      => new PostResource($this->postRepository->store($request)),
            'message'   => "Post created successfully",
            'errors'    => null,
        ]);
    }

    public function show($postId) {
        return response()->json([
            'data'      => new PostResource($this->postRepository->show($postId)),
            'message'   => "Post retrieved successfully",
            'errors'    => null,
        ]);
    }

    public function update(UpdatePostRequest $request, $postId) {
        return response()->json([
            'data'      =>  new PostResource($this->postRepository->update($request, $postId)),
            'message'   => "Post updated successfully",
            'errors'    => null,
        ]);
    }

    public function destroy($postId) {
        $result = $this->postRepository->destroy($postId) ? "Post deleted successfully" : "Post not found or unable to delete post";
        return response()->json([
            "data"      => null,
            "message"   => $result,
            'errors'    => null,
        ]);
    }

    public function getPostByPostSlug($slug) {
        return response()->json([
            'data'      => new PostResource($this->postRepository->getPostByPostSlug($slug)),
            'message'   => "Post retrieved successfully",
            'errors'    => null,
        ]);
    }

    public function getPostsByPostType($postType) {
        return PostCollection::collection($this->postRepository->getPostsByPostType($postType))->additional([
            'error'     => null,
            'message'   => "Posts retrieved successfully.",
            'links'     => [
                new LinkObject("self", "Posts", route('posts.getPostsByPostType', $postType), "GET"),
                new LinkObject("store", "New Post", route('posts.store'), "POST"),
            ]
        ]);
    }
}
