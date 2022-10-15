<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Repositories\Interfaces\EventRepositoryInterface;

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

class EventController extends Controller {

    private $EventRepository;

    public function __construct(EventRepositoryInterface $EventRepository) {
        $this->EventRepository = $EventRepository;
    }

    public function index() {
        return $this->EventRepository->all();
    }

    public function store(StoreEventRequest $request) {
        return $this->EventRepository->store($request);
    }

    public function show($event) {
        return $this->EventRepository->show($event);
    }

    public function update(UpdateEventRequest $request,  $event) {
        return $this->EventRepository->update($request,  $event);
    }

    public function destroy($event) {
        return $this->EventRepository->destroy($event);
    }
}
