<?php

namespace App\Http\Resources\Menu;

use Illuminate\Http\Resources\Json\JsonResource;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @description    : Menu collection.
 *========================================================================**/

class MenuCollection extends JsonResource {

    public function toArray($request) {
        return [
            'Id' => $this->id,
            'MenuTitle' => $this->menu_name,
            'Url' => $this->link_to,
            'Icon' => $this->icon
        ];
    }
}
