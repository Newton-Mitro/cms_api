<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostType;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\Post\PostResource;
use App\Http\Resources\Post\PostCollection;
use App\Repositories\Interfaces\PostRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil 
 * @email          : israful@cccul.com
 * @repo           :  
 * @createdOn      : 10-03-2022 
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : This Controller handle all user request  
 *========================================================================**/

class PostController extends Controller {

    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository) {
        $this->middleware('auth:api', ['except' => ['getPostsByPostType', 'getPostByPostSlug']]);
        $this->postRepository = $postRepository;
    }

    public function index($post_type) {
        return PostCollection::collection($this->postRepository->all($post_type));
    }

    public function getPostsByPostType($post_type) {
        return PostCollection::collection($this->postRepository->getPostsByPostType($post_type));
    }

    public function store(StorePostRequest $request) {
        return $this->postRepository->store($request);
    }

    public function show(Post $post) {
        return new PostResource($this->postRepository->show($post));
    }

    public function getPostByPostSlug($post_slug) {
        return new PostResource($this->postRepository->getPostByPostSlug($post_slug));
    }

    public function update(UpdatePostRequest $request, Post $post) {
        return $this->postRepository->update($request, $post);
    }

    public function destroy(Post $post) {
        return $this->postRepository->destroy($post);
    }
}
