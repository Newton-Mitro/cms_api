<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostType\PostTypeCollection;
use App\Repositories\Interfaces\PostTypeRepositoryInterface;

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

class PostTypeController extends Controller {

    private $postTypeRepository;

    public function __construct(PostTypeRepositoryInterface $postTypeRepository) {
        $this->middleware('auth:api');
        $this->postTypeRepository = $postTypeRepository;
    }

    public function index() {
        return PostTypeCollection::collection($this->postTypeRepository->all());
    }
}
