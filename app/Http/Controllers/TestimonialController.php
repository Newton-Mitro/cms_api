<?php

namespace App\Http\Controllers;

use App\Utilities\LinkObject;
use App\Http\Controllers\Controller;
use App\Http\Resources\Testimonial\TestimonialResource;
use App\Http\Resources\Testimonial\TestimonialCollection;
use App\Http\Requests\Testimonial\StoreTestimonialRequest;
use App\Http\Requests\Testimonial\UpdateTestimonialRequest;
use App\Repositories\Interfaces\TestimonialRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         : Isrfil
 * @email          : israfil@cccul.com
 * @repo           : 
 * @createdOn      : 03-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 18-10-2022
 * @description    : 
 *========================================================================**/

class TestimonialController extends Controller {

    private $TestimonialRepository;

    public function __construct(TestimonialRepositoryInterface $TestimonialRepository) {
        $this->TestimonialRepository = $TestimonialRepository;
    }

    public function index() {
        return response()->json([
            'data'      => TestimonialCollection::collection($this->TestimonialRepository->all()),
            'message'   => "Testimonials retrieved successfully",
            'errors'    => null,
            'links'     => [
                new LinkObject("Self", "Testimonials", route('testimonials.index'), "GET"),
                new LinkObject("Store", "New Testimonial", route('testimonials.store'), "POST"),
            ]
        ]);;
    }

    public function store(StoreTestimonialRequest $request) {
        return response()->json([
            'data'      => new TestimonialResource($this->TestimonialRepository->store($request)),
            'message'   => "Testimonial created successfully",
            'errors'    => null,
        ]);
    }

    public function show($testimonialId) {
        return response()->json([
            'data'      => new TestimonialResource($this->TestimonialRepository->show($testimonialId)),
            'message'   => "Testimonial retrieved successfully",
            'errors'    => null,
        ]);
    }

    public function update(UpdateTestimonialRequest $request,  $testimonialId) {
        return response()->json([
            'data' => new TestimonialResource($this->TestimonialRepository->update($request,  $testimonialId)),
            'message' => "Testimonial updated successfully",
            'errors' => null,
        ]);
    }

    public function destroy($testimonialId) {
        return response()->json([
            'data' => $this->TestimonialRepository->destroy($testimonialId),
            'message' => "Testimonial deleted successfully",
            'errors' => null,
        ]);
    }
}
