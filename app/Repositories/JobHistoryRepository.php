<?php

namespace App\Repositories;

use App\Models\JobHistory;
use App\Repositories\Interfaces\JobHistoryRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  Implements history interface
 *========================================================================**/

class JobHistoryRepository implements JobHistoryRepositoryInterface {

   public function show($jobHistory) {
      return JobHistory::where('applicant_id', $jobHistory)->get();
   }
}
