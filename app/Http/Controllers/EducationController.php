<?php

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil 
 * @email          : israful@cccul.com
 * @repo           :  
 * @createdOn      : 10-03-2022 
 * @description    : This Controller handle all user request  
 *========================================================================**/

namespace App\Http\Controllers;

use App\Repositories\Interfaces\EductionRepositoryInterface;

class EducationController extends Controller
{
    private $EductionRepository;

    public function __construct(EductionRepositoryInterface $EductionRepository)
    {
        $this->EductionRepository = $EductionRepository;
    }

    public function show($education)
    {
        return $this->EductionRepository->show($education);
    }
}
