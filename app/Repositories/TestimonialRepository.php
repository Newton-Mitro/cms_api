<?php

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Implements TestimonialRepository 
 *========================================================================**/

namespace App\Repositories;

use App\Models\Testimonial;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Http\Resources\Testimonial\TestimonialResource;
use App\Http\Resources\Testimonial\TestimonialCollection;
use App\Repositories\Interfaces\TestimonialRepositoryInterface;



class TestimonialRepository implements TestimonialRepositoryInterface
{

    public function all()
    {
        return TestimonialCollection::collection(Testimonial::all());
    }

    public function store($request)
    {
        $testimonial = new Testimonial();

        $testimonial->name = $request->Name;
        $testimonial->content = $request->Content;
        $testimonial->rating = $request->Rating;
        $testimonial->image = base64_decode($request->Image);
        $testimonial->save();
        return response()->json(['message ' => "you are successfully insert Testimonial "]);
    }
    public function show($testimonial)
    {
        return new TestimonialResource(Testimonial::find($testimonial));
    }
    public function  update(UpdateTestimonialRequest $request,  $testimonial)
    {
        $testimonial = Testimonial::find($testimonial);
        $testimonial->name = $request->Name;
        $testimonial->content = $request->Content;
        $testimonial->rating = $request->Rating;
        $testimonial->image = base64_decode($request->Image);
        $testimonial->update();
        return response()->json(['message ' => "you are successfully update Testimonial "]);
    }

    public function destroy($testimonial)
    {
        $testimonial = Testimonial::find($testimonial);
        $testimonial->delete();
        return response()->json(['message ' => "you are successfully delete Testimonial "]);
    }
}
