<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Utilities\LinkObject;

use App\Http\Controllers\Controller;
use App\Http\Resources\Menu\MenuResource;
use App\Http\Resources\Menu\MenuCollection;
use App\Http\Requests\Menu\StoreMenuRequest;
use App\Http\Requests\Menu\UpdateMenuRequest;
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
                new LinkObject("self", "Menus", route('menus.index'), "GET"),
                new LinkObject("store", "New Menu", route('menus.store'), "POST"),
            ]
        ]);
    }

    public function publicRootMenus() {
        return MenuCollection::collection($this->menuRepository->publicRootMenus())->additional([
            'error'     => null,
            'message'   => "Menus retrieved successfully.",
            'links'     => [
                new LinkObject("self", "Menus", route('menus.publicRootMenus'), "GET"),
                new LinkObject("store", "New Menu", route('menus.store'), "POST"),
            ]
        ]);
    }

    public function adminRootMenus() {
        return MenuCollection::collection($this->menuRepository->adminRootMenus())->additional([
            'error'     => null,
            'message'   => "Menus retrieved successfully.",
            'links'     => [
                new LinkObject("self", "Menus", route('menus.adminRootMenus'), "GET"),
                new LinkObject("store", "New Menu", route('menus.store'), "POST"),
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

    public function update(UpdateMenuRequest $request, $menuId) {
        return response()->json([
            'data'      => new MenuResource($this->menuRepository->update($request, $menuId)),
            'message'   => "Menu updated successfully",
            'errors'    => null,
        ]);
    }

    public function show($menuId) {
        return response()->json([
            'data'      => new MenuResource($this->menuRepository->show($menuId)),
            'message'   => "Menu retrieved successfully",
            'errors'    => null,
        ]);
    }

    public function destroy($menuId) {
        $result = $this->menuRepository->destroy($menuId) ? "Menu deleted successfully" : "Menu not found or unable to delete menu";
        return response()->json([
            'data'      => null,
            'message'   => $result,
            'errors'    => null,
        ]);
    }
}
