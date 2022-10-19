<?php

namespace App\Repositories;

use App\Models\Testimonial;
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
        return Testimonial::findOrFail($testimonialId);
    }

    public function  update($request,  $testimonialId) {
        $testimonial = Testimonial::findOrFail($testimonialId);
        $testimonial->name = $request->Name;
        $testimonial->content = $request->Content;
        $testimonial->rating = $request->Rating;
        $testimonial->image = base64_decode($request->Image, false);
        $testimonial->update();
        return $testimonial;
    }

    public function destroy($testimonialId) {
        return Testimonial::findOrFail($testimonialId)->delete();
    }
}
