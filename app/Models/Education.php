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
 * @description    :  Eduction model for applicant
 *========================================================================**/

class Education extends Model {

    use HasFactory;
    protected $table = 'educations';

    public function applicant() {
        return $this->belongsTo(Applicant::class);
    }
}
