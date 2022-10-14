<?php

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @description    : Menu resource collection.
 *========================================================================**/

namespace App\Http\Resources\Menu;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'Id' => $this->id,
            'MenuTitle' => $this->menu_name,
            'Url' => $this->link_to,
            'Icon' => $this->icon,
        ];
    }
}
