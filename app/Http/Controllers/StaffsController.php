<?php

namespace App\Http\Controllers;

use App\Utilities\LinkObject;
use App\Http\Controllers\Controller;
use App\Http\Resources\Staff\StaffResource;
use App\Http\Resources\Staff\StaffCollection;
use App\Http\Requests\Staff\StoreStaffsRequest;
use App\Http\Requests\Staff\UpdateStaffsRequest;
use App\Repositories\Interfaces\StaffsRepositoryInterface;

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

class StaffsController extends Controller {

    private $StaffsRepository;

    public function __construct(StaffsRepositoryInterface $staffsRepository) {
        return $this->StaffsRepository = $staffsRepository;
    }

    public function index() {
        return response()->json([
            'data'      => StaffCollection::collection($this->StaffsRepository->all()),
            'message'   => "Staffs retrieved successfully",
            'errors'    => null,
            'links'     => [
                new LinkObject("Self", "Staffs", route('staffs.index'), "GET"),
                new LinkObject("Store", "New Staff", route('staffs.store'), "POST"),
            ]

        ]);
    }

    public function store(StoreStaffsRequest $request) {
        return response()->json([
            'data'      => new StaffResource($this->StaffsRepository->store($request)),
            'message'   => "Staff created successfully",
            'errors'    => null,
        ]);
    }

    public function show($staffId) {
        return response()->json([
            'data'      => new StaffResource($this->StaffsRepository->show($staffId)),
            'message'   => "Staff retrieved successfully",
            'errors'    => null,
        ]);
    }

    public function update(UpdateStaffsRequest $request,  $staffId) {
        return response()->json([
            'data'      => new StaffResource($this->StaffsRepository->update($request,  $staffId)),
            'message'   => "Staff updated successfully",
            'errors'    => null,
        ]);
    }

    public function destroy($staffId) {
        $result = $this->StaffsRepository->destroy($staffId) ? "Staff deleted successfully" : "Staff not found or unable to delete staff";
        return response()->json([
            'data'      => null,
            'message'   => $result,
            'errors'    => null,
        ]);
    }
}
