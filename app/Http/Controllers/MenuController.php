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

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Resources\Menu\MenuResource;
use App\Repositories\Interfaces\MenuRepositoryInterface;

class MenuController extends Controller
{
    private $MenuRepository;

    public function __construct(MenuRepositoryInterface $MenuRepository)
    {
        $this->MenuRepository = $MenuRepository;
    }
    public function index()
    {
        return $this->MenuRepository->all();
    }

    public function store(StoreMenuRequest $request)
    {
        return $this->MenuRepository->store($request);
    }

    public function show($menu)
    {
        return $this->MenuRepository->show($menu);
    }
}
