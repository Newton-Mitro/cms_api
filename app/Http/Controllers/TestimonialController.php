<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Repositories\Interfaces\TestimonialRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         : Isrfil
 * @email          : israfil@cccul.com
 * @repo           : 
 * @createdOn      : 03-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : Application stage seeder
 *========================================================================**/

class TestimonialController extends Controller {

    private $TestimonialRepository;

    public function __construct(TestimonialRepositoryInterface $TestimonialRepository) {
        $this->TestimonialRepository = $TestimonialRepository;
    }

    public function index() {
        return $this->TestimonialRepository->all();
    }

    public function store(StoreTestimonialRequest $request) {
        return $this->TestimonialRepository->store($request);
    }

    public function show($testimonial) {
        return $this->TestimonialRepository->show($testimonial);
    }

    public function update(UpdateTestimonialRequest $request,  $testimonial) {
        return $this->TestimonialRepository->update($request,  $testimonial);
    }

    public function destroy($testimonial) {
        return $this->TestimonialRepository->destroy($testimonial);
    }
}
