<?php

namespace App\Models;

use App\Models\Staff;
use App\Models\SocialMediaType;
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

class StaffSocialLink extends Model {
    use HasFactory;

    public function staff() {
        return $this->belongsTo(Staff::class);
    }

    public function socialMediaType() {
        return $this->belongsTo(SocialMediaType::class);
    }
}
