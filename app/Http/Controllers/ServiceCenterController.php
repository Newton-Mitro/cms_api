<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceCenterRequest;
use App\Http\Requests\UpdateServiceCenterRequest;
use App\Repositories\Interfaces\ServiceCenterRepositoryInterface;

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

class ServiceCenterController extends Controller {

    private $ServiceCenterRepository;

    public function __construct(ServiceCenterRepositoryInterface $ServiceCenterRepository) {
        $this->ServiceCenterRepository = $ServiceCenterRepository;
    }

    public function index() {
        return $this->ServiceCenterRepository->all();
    }

    public function store(StoreServiceCenterRequest $request) {
        return $this->ServiceCenterRepository->store($request);
    }

    public function show($serviceCenter) {
        return $this->ServiceCenterRepository->show($serviceCenter);
    }

    public function update(UpdateServiceCenterRequest $request, $serviceCenter) {
        return $this->ServiceCenterRepository->update($request, $serviceCenter);
    }

    public function destroy($serviceCenter) {
        return $this->ServiceCenterRepository->destroy($serviceCenter);
    }
}
