<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\UpdateTestimonialRequest;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  Testimonial Repository Interface
 *========================================================================**/

interface TestimonialRepositoryInterface {
    public function all();
    public function store($request);
    public function  update(UpdateTestimonialRequest $request,  $testimonial);
    public function destroy($testimonial);
    public function show($testimonial);
}
