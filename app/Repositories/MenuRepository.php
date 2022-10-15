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
 * @UpdatedAt      : 15-10-2022
 * @description    : job circular resource collection.
 *========================================================================**/

class MenuRepository implements MenuRepositoryInterface {

    public function all() {
        return Menu::all();
    }

    public function store($request) {
        $menu = new Menu();
        $menu->menu_name = $request->menu_name;
        $menu->link_to = $request->link_to;
        $menu->icon = $request->icon;
        $menu->parent_id = $request->parent_id;
        return  $menu->save();
    }

    public function show($menu) {
        return Menu::find($menu);
    }
}
