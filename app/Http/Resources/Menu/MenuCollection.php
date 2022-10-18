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
 * @UpdatedAt      : 18-10-2022
 * @description    : Menu collection.
 *========================================================================**/

class MenuCollection extends JsonResource {

    public function toArray($request) {
        return [
            'menuId'    => $this->id,
            'menuTitle' => $this->menu_name,
            'url'       => $this->link_to,
            'icon'      => $this->icon,
            'submenus'  => MenuCollection::collection($this->children),
        ];
    }
}
