<?php

namespace App\Models;

use App\Models\StaffSocialLink;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

class SocialMediaType extends Model {
    use HasFactory;

    public function staffSocialLinks() {
        return $this->hasMany(StaffSocialLink::class);
    }
}
