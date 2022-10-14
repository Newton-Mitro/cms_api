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

use App\Repositories\Interfaces\TrainingRepositoryInterface;

class TrainingController extends Controller
{

    private $TrainingRepository;

    public function __construct(TrainingRepositoryInterface $TrainingRepository)
    {
        $this->TrainingRepository = $TrainingRepository;
    }

    public function show($training)
    {
        return $this->TrainingRepository->show($training);
    }
}
