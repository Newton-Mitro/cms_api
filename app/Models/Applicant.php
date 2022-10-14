<?php

namespace App\Models;

use App\Models\Training;
use App\Models\Education;
use App\Models\JobHistory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @updatedBy      :  Newton Mitro
 * @email          :  israfil@cccul.com 
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Applicant model
 *========================================================================**/

class Applicant extends Model
{
    use HasFactory;

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function jobHistories()
    {
        return $this->hasMany(JobHistory::class);
    }

    public function trainings()
    {
        return $this->hasMany(Training::class);
    }
}
