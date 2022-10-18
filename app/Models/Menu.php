<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  18-10-2022
 * @description    :  Menu model 
 *========================================================================**/

class Menu extends Model {
    use HasFactory;

    protected $table = 'menus';

    public function children() {
        return $this->hasMany('App\Models\Menu', 'parent_id', 'id')->with('children');
    }
}
