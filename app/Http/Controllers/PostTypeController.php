<?php

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil 
 * @email          : israful@cccul.com
 * @repo           :  
 * @createdOn      : 10-03-2022 
 * @description    : This Controller handle all user request  
 *========================================================================**/

namespace App\Http\Controllers;

use App\Models\PostType;
use App\Repositories\Interfaces\PostTypeRepositoryInterface;

class PostTypeController extends Controller
{
    private $postTypeRepository;

    public function __construct(PostTypeRepositoryInterface $postTypeRepository)
    {
        $this->postTypeRepository = $postTypeRepository;
    }

    public function index()
    {
        return $this->postTypeRepository->all();
    }

    public function show(PostType $postType)
    {
        return $this->postTypeRepository->show($postType);
    }
}
