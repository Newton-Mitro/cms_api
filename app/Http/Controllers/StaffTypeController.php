<?php

namespace App\Http\Controllers;

use App\Utilities\LinkObject;
use App\Http\Controllers\Controller;
use App\Http\Resources\StaffType\StaffTypeResource;
use App\Http\Resources\StaffType\StaffTypeCollection;
use App\Http\Requests\StaffType\StoreStaffTypeRequest;
use App\Http\Requests\StaffType\UpdateStaffTypeRequest;
use App\Repositories\Interfaces\StaffTypeRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         : Isrfil
 * @email          : israfil@cccul.com
 * @repo           : 
 * @createdOn      : 03-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 20-10-2022
 * @description    : 
 *========================================================================**/

class StaffTypeController extends Controller {

    private $StaffTypesRepository;

    public function __construct(StaffTypeRepositoryInterface $staffTypesRepository) {
        return $this->StaffTypesRepository = $staffTypesRepository;
    }

    public function index() {
        return response()->json([
            'data'      => StaffTypeCollection::collection($this->StaffTypesRepository->all()),
            'message'   => "Staffs retrieved successfully",
            'errors'    => null,
            'links'     => [
                new LinkObject("store", "New Staff Type", route('staff-types.store'), "POST"),
                new LinkObject("index", "Staffs", route('staffs.index'), "GET"),
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
            'message'   => "Staff type retrieved successfully",
            'errors'    => null,
        ]);
    }

    public function update(UpdateStaffTypeRequest $request,  $staffTypeId) {
        return response()->json([
            'data'      => new StaffTypeResource($this->StaffTypesRepository->update($request,  $staffTypeId)),
            'message'   => "Staff type updated successfully",
            'errors'    => null,
        ]);
    }

    public function destroy($staffTypeId) {
        $result = $this->StaffTypesRepository->destroy($staffTypeId) ? "Staff type deleted successfully" : "Staff type not found or unable to delete staff type";
        return response()->json([
            'data'      => null,
            'message'   => $result,
            'errors'    => null,
        ]);
    }
}
