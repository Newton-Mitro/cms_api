<?php

namespace App\Http\Controllers;

use App\Utilities\LinkObject;
use App\Http\Controllers\Controller;
use App\Http\Resources\StaffType\StaffTypeResource;
use App\Http\Resources\StaffType\StaffTypeCollection;
use App\Http\Requests\StaffType\StoreStaffTypeRequest;
use App\Http\Requests\StaffType\UpdateStaffTypeRequest;

/**========================================================================
 * ?                                ABOUT
 * @author         : Isrfil
 * @email          : israfil@cccul.com
 * @repo           : 
 * @createdOn      : 03-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : 
 *========================================================================**/

class StaffTypeController extends Controller {

    private $StaffTypesRepository;

    public function __construct(StaffTypesRepositoryInterface $staffTypesRepository) {
        return $this->StaffTypesRepository = $staffTypesRepository;
    }

    public function index() {
        return response()->json([
            'data'      => StaffTypeCollection::collection($this->StaffTypesRepository->all()),
            'message'   => "Staffs retrieved successfully",
            'errors'    => null,
            'links'     => [
                new LinkObject("Self", "Staff Types", route('staff-types.index'), "GET"),
                new LinkObject("Store", "New Staff Type", route('staff-types'), "POST"),
                new LinkObject("All", "Staffs", route('staffs.index'), "GET"),
            ]
        ]);
    }

    public function store(StoreStaffTypeRequest $request) {
        return response()->json([
            'data'      => new StaffTypeResource($this->StaffTypesRepository->store($request)),
            'message'   => "Staff created successfully",
            'errors'    => null,
        ]);
    }

    public function show($staffTypeId) {
        return response()->json([
            'data'      => new StaffTypeResource($this->StaffTypesRepository->show($staffTypeId)),
            'message'   => "Staff retrieved successfully",
            'errors'    => null,
        ]);
    }

    public function update(UpdateStaffTypeRequest $request,  $staffTypeId) {
        return response()->json([
            'data' => new StaffTypeResource($this->StaffTypesRepository->update($request,  $staffTypeId)),
            'message' => "Staff updated successfully",
            'errors' => null,
        ]);
    }

    public function destroy($staffTypeId) {
        return response()->json([
            'data' => $this->StaffTypesRepository->destroy($staffTypeId),
            'message' => "Staff deleted successfully",
            'errors' => null,
        ]);
    }
}
