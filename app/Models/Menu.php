<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  Menu model 
 *========================================================================**/

class Menu extends Model {
    use HasFactory;

    public function children() {
        return $this->hasMany('App\Models\Menu', 'parent_id', 'id');
    }

    public function parent() {
        return $this->hasOne('App\Models\Menu', 'id', 'parent_id');
    }
}
