<?php

namespace App\Repositories\Interfaces;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  18-10-2022
 * @description    :  Testimonial Repository Interface
 *========================================================================**/

interface TestimonialRepositoryInterface {
    public function all();
    public function store($request);
    public function update($request,  $testimonialId);
    public function destroy($testimonialId);
    public function show($testimonialId);
}
