<?php

namespace App\Repositories\Interfaces;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  18-10-2022
 * @description    :  Post repository interface
 *========================================================================**/

interface PostRepositoryInterface {
    public function all();
    public function getPostsByPostType($post_type);
    public function show($postId);
    public function getPostByPostSlug($post_slug);
    public function store($request);
    public function update($request, $postId);
    public function destroy($postId);
}
