<?php

namespace App\Http\Controllers;

use App\Utilities\LinkObject;

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

    public function index() {
        return response()->json([
            'data'      => StaffTypeCollection::collection($this->StaffsRepository->all()),
            'message'   => "Staffs retrieved successfully",
            'errors'    => null,
            'links'     => [
                new LinkObject("Self", "Staff Types", route('staff-types.index'), "GET"),
                new LinkObject("Store", "New Staff Type", route('staff-types'), "POST"),
                new LinkObject("All", "Staffs", route('staffs.index'), "GET"),
            ]
        ]);
    }

    public function store(StoreStaffTypesRequest $request) {
        return response()->json([
            'data'      => new StaffResource($this->StaffsRepository->store($request)),
            'message'   => "Staff created successfully",
            'errors'    => null,
        ]);
    }

    public function show($staff) {
        return response()->json([
            'data'      => new StaffTypeResource($this->StaffsRepository->show($staff)),
            'message'   => "Staff retrieved successfully",
            'errors'    => null,
        ]);
    }

    public function update(UpdateStaffTypesRequest $request,  $staff) {
        return response()->json([
            'data' => new StaffTypeResource($this->StaffsRepository->update($request,  $staff)),
            'message' => "Staff updated successfully",
            'errors' => null,
        ]);
    }

    public function destroy($staff) {
        return response()->json([
            'data' => $this->StaffsRepository->destroy($staff),
            'message' => "Staff deleted successfully",
            'errors' => null,
        ]);
    }
}
