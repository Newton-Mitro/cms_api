<?php

namespace App\Repositories;

use App\Models\Testimonial;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Repositories\Interfaces\TestimonialRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @updatedAt      :  18-10-2022
 * @description    :  
 *========================================================================**/

class TestimonialRepository implements TestimonialRepositoryInterface {

    public function all() {
        return Testimonial::paginate(10);
    }

    public function store($request) {
        $testimonial = new Testimonial();
        $testimonial->name = $request->Name;
        $testimonial->content = $request->Content;
        $testimonial->rating = $request->Rating;
        $testimonial->image = base64_decode($request->Image, false);
        $testimonial->save();
        return $testimonial;
    }

    public function show($testimonialId) {
        $testimonial = Testimonial::find($testimonialId);
        return $testimonial;
    }

    public function  update($request,  $testimonialId) {
        $testimonial = Testimonial::find($testimonialId);
        $testimonial->name = $request->Name;
        $testimonial->content = $request->Content;
        $testimonial->rating = $request->Rating;
        $testimonial->image = base64_decode($request->Image, false);
        $testimonial->update();
        return $testimonial;
    }

    public function destroy($testimonialId) {
        $testimonial = Testimonial::find($testimonialId);
        return $testimonial->delete();
    }
}
