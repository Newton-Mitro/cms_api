<?php

namespace App\Http\Controllers;

use App\Utilities\LinkObject;
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

    public function show($serviceCenter) {
        return response()->json([
            'data'      => new ServiceCenterResource($this->ServiceCenterRepository->show($serviceCenter)),
            'message'   => "Service center retrieved successfully",
            'errors'    => null,
        ]);
    }

    public function update(UpdateServiceCenterRequest $request, $serviceCenter) {
        return response()->json([
            'data' => new ServiceCenterResource($this->ServiceCenterRepository->update($request,  $serviceCenter)),
            'message' => "Service center updated successfully",
            'errors' => null,
        ]);
    }

    public function destroy($serviceCenter) {
        return response()->json([
            'data' => $this->ServiceCenterRepository->destroy($serviceCenter),
            'message' => "Service center deleted successfully",
            'errors' => null,
        ]);
    }
}
