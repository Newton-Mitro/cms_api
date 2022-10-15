<?php

namespace App\Repositories;

use App\Models\Education;
use App\Repositories\Interfaces\EductionRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  Implements eduction interface
 *========================================================================**/

class EductionRepository implements EductionRepositoryInterface {

  public function show($education) {
    return Education::where('applicant_id', $education)->get();
  }
}
