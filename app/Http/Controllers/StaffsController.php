<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStaffsRequest;
use App\Http\Requests\UpdateStaffsRequest;
use App\Repositories\Interfaces\StaffsRepositoryInterface;

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

class StaffsController extends Controller {

    private $StaffsRepository;

    public function __construct(StaffsRepositoryInterface $staffsRepository) {
        return $this->StaffsRepository = $staffsRepository;
    }

    public function index() {
        return $this->StaffsRepository->all();
    }

    public function store(StoreStaffsRequest $request) {
        return $this->StaffsRepository->store($request);
    }

    public function show($staff) {
        return $this->StaffsRepository->show($staff);
    }

    public function update(UpdateStaffsRequest $request,  $staff) {
        return $this->StaffsRepository->update($request, $staff);
    }

    public function destroy($staff) {
        return $this->StaffsRepository->destroy($staff);
    }
}
