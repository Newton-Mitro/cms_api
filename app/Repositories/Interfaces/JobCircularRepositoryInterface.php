<?php
/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Job circular interface 
 *========================================================================**/

namespace App\Repositories\Interfaces;

use App\Models\JobCircular;
use App\Http\Requests\UpdateJobCircularRequest;

Interface JobCircularRepositoryInterface{
    public function all();
    
    public function show($jobCircular);

    public function store($request);

    public function update(UpdateJobCircularRequest $request, JobCircular $jobCircular);
    
    public function destroy($jobCircular);
}
