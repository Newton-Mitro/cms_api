<?php

namespace App\Http\Controllers;

use App\Utilities\LinkObject;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostType\PostTypeCollection;
use App\Repositories\Interfaces\PostTypeRepositoryInterface;

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

class PostTypeController extends Controller {

    private $postTypeRepository;

    public function __construct(PostTypeRepositoryInterface $postTypeRepository) {
        // $this->middleware('auth:api');
        $this->postTypeRepository = $postTypeRepository;
    }

    public function index() {
        return response()->json([
            'data'      => PostTypeCollection::collection($this->postTypeRepository->all()),
            'message'   => "Post types retrieved successfully",
            'errors'    => null,
            'links'     => [
                new LinkObject("Self", "Post Types", route('post-types.index'), "GET"),
                new LinkObject("Store", "New Post Type", route('post-types'), "POST"),
                new LinkObject("All", "Posts", route('posts.index'), "GET"),
            ]
        ]);
    }
}
