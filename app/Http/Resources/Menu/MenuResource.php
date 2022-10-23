<?php

namespace App\Http\Resources\Menu;

use Illuminate\Http\Resources\Json\JsonResource;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : Menu resource collection.
 *========================================================================**/

class MenuResource extends JsonResource {
    public function toArray($request) {
        return [
            'menuId'        => $this->id,
            'menuTitle'     => $this->menu_name,
            'url'           => $this->link_to,
            'icon'          => $this->icon,
            'parentId'      => $this->parent_id,
            'adminMenu'    => $this->admin_menu,
            'active'        => $this->active,
        ];
    }
}
