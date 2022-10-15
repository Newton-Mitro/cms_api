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
 * @updatedAt      :  15-10-2022
 * @description    :  Implements TestimonialRepository 
 *========================================================================**/

class TestimonialRepository implements TestimonialRepositoryInterface {

    public function all() {
        return Testimonial::all();
    }

    public function store($request) {
        $testimonial = new Testimonial();
        $testimonial->name = $request->Name;
        $testimonial->content = $request->Content;
        $testimonial->rating = $request->Rating;
        $testimonial->image = base64_decode($request->Image);
        $testimonial->save();
        return $testimonial->save();
    }

    public function show($testimonial) {
        return Testimonial::find($testimonial);
    }

    public function  update(UpdateTestimonialRequest $request,  $testimonial) {
        $testimonial = Testimonial::find($testimonial);
        $testimonial->name = $request->Name;
        $testimonial->content = $request->Content;
        $testimonial->rating = $request->Rating;
        $testimonial->image = base64_decode($request->Image);
        $testimonial->update();
        return $testimonial->update();
    }

    public function destroy($testimonial) {
        $testimonial = Testimonial::find($testimonial);
        $testimonial->delete();
    }
}
