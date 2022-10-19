<?php

namespace App\Repositories;

use App\Models\Menu;
use App\Repositories\Interfaces\MenuRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 18-10-2022
 * @description    : 
 *========================================================================**/

class MenuRepository implements MenuRepositoryInterface {

    public function all() {
        return Menu::paginate(10);
    }

    public function rootMenus() {
        return Menu::where('parent_id', 0)->get();
    }

    public function store($request) {
        $menu = new Menu();
        $menu->menu_name = $request->menuTitle;
        $menu->link_to = $request->url;
        $menu->icon = $request->icon;
        $menu->parent_id = $request->parentId;
        $menu->save();
        return  $menu;
    }

    public function  update($request,  $menuId) {
        $menu = Menu::find($menuId);
        $menu->menu_name = $request->menuTitle;
        $menu->link_to = $request->url;
        $menu->icon = $request->icon;
        $menu->parent_id = $request->parentId;
        $menu->update();
        return $menu;
    }

    public function show($menuId) {
        $menu = Menu::find($menuId);
        return $menu;
    }

    public function destroy($menuId) {
        $menu = Menu::find($menuId);
        return $menu->delete();
    }
}
