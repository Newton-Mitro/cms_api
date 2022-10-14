<?php

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil 
 * @email          : israful@cccul.com
 * @repo           :  
 * @createdOn      : 10-03-2022 
 * @description    : This Controller handle all user JobHistory request  
 *========================================================================**/

namespace App\Http\Controllers;

use App\Repositories\Interfaces\JobHistoryRepositoryInterface;

class JobHistoryController extends Controller
{
    private $JobHistoryRepository;

    public function __construct(JobHistoryRepositoryInterface $JobHistoryRepository)
    {
        $this->JobHistoryRepository = $JobHistoryRepository;
    }

    public function show($jobHistory)
    {
        return $this->JobHistoryRepository->show($jobHistory);
    }
}
