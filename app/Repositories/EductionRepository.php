<?php

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Implements eduction interface
 *========================================================================**/

namespace App\Repositories;

use App\Models\Education;
use App\Http\Resources\Eduction\EductionCollection;
use App\Repositories\Interfaces\EductionRepositoryInterface;


class EductionRepository implements EductionRepositoryInterface
{

  public function show($education)
  {
    return EductionCollection::Collection(Education::where('applicant_id', $education)->get());
  }
}
