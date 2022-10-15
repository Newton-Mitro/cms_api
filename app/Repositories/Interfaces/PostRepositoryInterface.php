<?php

namespace App\Repositories\Interfaces;

use App\Models\Post;
use App\Http\Requests\UpdatePostRequest;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  Post repository interface
 *========================================================================**/

interface PostRepositoryInterface {
    public function all();
    public function getPostsByPostType($post_type);
    public function show($post);
    public function getPostByPostSlug($post_slug);
    public function store($request);
    public function update(UpdatePostRequest $request, Post $post);
    public function destroy($post);
}
