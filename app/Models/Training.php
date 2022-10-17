<?php

namespace App\Models;

use App\Models\Applicant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  17-10-2022
 * @description    :  Applicant training model
 *========================================================================**/

class Training extends Model {
    use HasFactory;

    public function applicant() {
        return $this->belongsTo(Applicant::class);
    }
}
