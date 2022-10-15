<?php

namespace App\Http\Controllers;

use App\Models\JobCircular;
use App\Http\Requests\StoreJobCircularRequest;
use App\Http\Requests\UpdateJobCircularRequest;
use App\Repositories\Interfaces\JobCircularRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         : Israfil 
 * @email          : israful@cccul.com
 * @repo           :  
 * @createdOn      : 10-03-2022 
 * @description    : This Controller handle all user request  
 *========================================================================**/

class JobCircularController extends Controller {
    
    private $JobCircularRepository;

    public function __construct(JobCircularRepositoryInterface $JobCircularRepository) {
        $this->JobCircularRepository = $JobCircularRepository;
    }

    public function index() {
        return $this->JobCircularRepository->all();
    }

    public function store(StoreJobCircularRequest $request) {
        return $this->JobCircularRepository->store($request);
    }

    public function show(JobCircular $jobCircular) {
        return  $this->JobCircularRepository->show($jobCircular);
    }

    public function update(UpdateJobCircularRequest $request, JobCircular $jobCircular) {
        return $this->JobCircularRepository->update($request,  $jobCircular);
    }

    public function destroy(JobCircular $jobCircular) {
        return $this->JobCircularRepository->destroy($jobCircular);
    }
}
