<?php

namespace App\Repositories;

use App\Models\Training;

use App\Repositories\Interfaces\TrainingRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  Implements post interface
 *========================================================================**/

class TrainingRepository implements TrainingRepositoryInterface {
    public function show($training) {
        return Training::where('applicant_id', $training)->get();
    }
}
