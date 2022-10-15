<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil 
 * @email          : israful@cccul.com
 * @repo           :  
 * @createdOn      : 10-03-2022 
 * @description    : This Controller handle all user request  
 *========================================================================**/

class PostController extends Controller {
    
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository) {
        $this->postRepository = $postRepository;
    }

    public function index() {
        return $this->postRepository->all();
    }

    public function store(StorePostRequest $request) {
        return $this->postRepository->store($request);
    }

    public function show(Post $post) {
        return $this->postRepository->show($post);
    }

    public function update(UpdatePostRequest $request, Post $post) {
        return $this->postRepository->update($request, $post);
    }

    public function destroy(Post $post) {
        return $this->postRepository->destroy($post);
    }
}
