<?php

namespace App\Models;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil
 * @email          : israfil@cccul.com
 * @repo           :
 * @createdOn      : 3-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 20-10-2022
 * @description    : job circular resource collection.
 *========================================================================**/

class StaffType extends Model {
    use HasFactory;

    public function staffs() {
        return $this->hasMany(Staff::class);
    }
}
