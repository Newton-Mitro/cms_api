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
                new LinkObject("Self", "All", route('posts.index'), "GET"),
                new LinkObject("Store", "New Post", route('posts.store'), "POST"),
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
        return response()->json([
            "data"      => $this->postRepository->destroy($postId),
            "message"   => "Post deleted successfully",
            'errors'    => null,
        ]);
    }

    public function getPostByPostSlug($post_slug) {
        return response()->json([
            'data'      => new PostResource($this->postRepository->getPostByPostSlug($post_slug)),
            'message'   => "Post retrieved successfully",
            'errors'    => null,
        ]);
    }

    public function getPostsByPostType($post_type) {
        return PostCollection::collection($this->postRepository->getPostsByPostType($post_type))->additional([
            'error'     => null,
            'message'   => "Post retrieved successfully.",
            'links'     => [
                new LinkObject("Self", "All", route('posts.getPostsByPostType', $post_type), "GET"),
                new LinkObject("Store", "New Post", route('posts.store'), "POST"),
            ]
        ]);
    }
}
