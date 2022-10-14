<?php

namespace App\Repositories;

use App\Models\Menu;
use App\Http\Resources\Menu\MenuResource;
use App\Http\Resources\Menu\MenuCollection;
use App\Repositories\Interfaces\MenuRepositoryInterface;

class MenuRepository implements MenuRepositoryInterface
{

    public function all()
    {
        return MenuCollection::collection(Menu::all());
    }
    public function store($request)
    {
        $menu = new Menu();
        $menu->menu_name = $request->menu_name;
        $menu->link_to = $request->link_to;
        $menu->icon = $request->icon;
        $menu->parent_id = $request->parent_id;
        $menu->save();
        return response()->json(['message ' => "you are successfully insert menu"]);
    }
    public function show($menu)
    {
        return new MenuResource(Menu::find($menu));
    }
}
