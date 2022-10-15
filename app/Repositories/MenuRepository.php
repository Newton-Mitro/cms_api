<?php

namespace App\Repositories;

use App\Models\Menu;
use App\Repositories\Interfaces\MenuRepositoryInterface;

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
