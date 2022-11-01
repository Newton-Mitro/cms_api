<?php

namespace App\Models;

use App\Models\ServiceCenter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  04-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  All service center working area 
 *========================================================================**/

class ServiceCenterType extends Model
{
    use HasFactory;

    public function serviceCenters()
    {
        return $this->hasMany(ServiceCenter::class);
    }
}
