<?php

namespace App\Http\Controllers;

use App\Utilities\LinkObject;
use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceCenter\ServiceCenterResource;
use App\Http\Resources\ServiceCenter\ServiceCenterCollection;
use App\Http\Requests\ServiceCenter\StoreServiceCenterRequest;
use App\Http\Requests\ServiceCenter\UpdateServiceCenterRequest;
use App\Repositories\Interfaces\ServiceCenterRepositoryInterface;

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

class ServiceCenterController extends Controller {

    private $ServiceCenterRepository;

    public function __construct(ServiceCenterRepositoryInterface $ServiceCenterRepository) {
        $this->ServiceCenterRepository = $ServiceCenterRepository;
    }

    public function index() {
        return response()->json([
            'data'      => ServiceCenterCollection::collection($this->ServiceCenterRepository->all()),
            'message'   => "Service centers retrieved successfully",
            'errors'    => null,
            'links'     => [
                new LinkObject("Self", "Service Centers", route('service-centers.index'), "GET"),
                new LinkObject("Store", "New Service Center", route('service-centers.store'), "POST"),
            ]
        ]);
    }

    public function store(StoreServiceCenterRequest $request) {
        return response()->json([
            'data'      => new ServiceCenterResource($this->ServiceCenterRepository->store($request)),
            'message'   => "Service center created successfully",
            'errors'    => null,
        ]);
        return $this->ServiceCenterRepository->store($request);
    }

    public function show($serviceCenterId) {
        return response()->json([
            'data'      => new ServiceCenterResource($this->ServiceCenterRepository->show($serviceCenterId)),
            'message'   => "Service center retrieved successfully",
            'errors'    => null,
        ]);
    }

    public function update(UpdateServiceCenterRequest $request, $serviceCenterId) {
        return response()->json([
            'data'      => new ServiceCenterResource($this->ServiceCenterRepository->update($request,  $serviceCenterId)),
            'message'   => "Service center updated successfully",
            'errors'    => null,
        ]);
    }

    public function destroy($serviceCenterId) {
        $result = $this->ServiceCenterRepository->destroy($serviceCenterId) ? "Service center deleted successfully" : "Service center not found or unable to delete service center";
        return response()->json([
            'data'      => null,
            'message'   => $result,
            'errors'    => null,
        ]);
    }
}
