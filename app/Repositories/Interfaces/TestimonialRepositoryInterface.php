<?php

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Testimonial Repository Interface
 *========================================================================**/

namespace App\Repositories\Interfaces;

use App\Http\Requests\UpdateTestimonialRequest;


interface TestimonialRepositoryInterface
{

    public function all();

    public function store($request);

    public function  update(UpdateTestimonialRequest $request,  $testimonial);

    public function destroy($testimonial);

    public function show($testimonial);
}
