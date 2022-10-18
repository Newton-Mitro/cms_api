<?php

namespace App\Http\Controllers;

use App\Utilities\LinkObject;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Http\Resources\Menu\MenuCollection;
use App\Http\Resources\Menu\MenuResource;
use App\Models\Menu;
use App\Repositories\Interfaces\MenuRepositoryInterface;

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

class MenuController extends Controller {

    private $menuRepository;

    public function __construct(MenuRepositoryInterface $MenuRepository) {
        $this->menuRepository = $MenuRepository;
    }

    public function index() {
        return MenuResource::collection($this->menuRepository->all())->additional([
            'error'     => null,
            'message'   => "Menus retrieved successfully.",
            'links'     => [
                new LinkObject("Self", "All", route('menus.index'), "GET"),
                new LinkObject("Store", "New Menu", route('menus.store'), "POST"),
            ]
        ]);
    }

    public function rootMenus() {
        return MenuCollection::collection($this->menuRepository->rootMenus())->additional([
            'error'     => null,
            'message'   => "Menus retrieved successfully.",
            'links'     => [
                new LinkObject("Self", "All", route('menus.index'), "GET"),
                new LinkObject("Store", "New Menu", route('menus.store'), "POST"),
            ]
        ]);
    }

    public function store(StoreMenuRequest $request) {
        return response()->json([
            'data'      => new MenuResource($this->menuRepository->store($request)),
            'message'   => "Menu created successfully",
            'errors'    => null,
        ]);
    }

    public function update(UpdateMenuRequest $request, Menu $menu) {
        return response()->json([
            'data'      => new MenuResource($this->menuRepository->update($request, $menu)),
            'message'   => "Menu updated successfully",
            'errors'    => null,
        ]);
    }

    public function show(Menu $menu) {
        return response()->json([
            'data'      => new MenuResource($this->menuRepository->show($menu)),
            'message'   => "Menu retrieved successfully",
            'errors'    => null,
        ]);
    }

    public function destroy(Menu $menu) {
        return response()->json([
            'data'      => $this->menuRepository->destroy($menu),
            'message'   => "Menu deleted successfully",
            'errors'    => null,
        ]);
    }
}
