<?php

namespace App\Http\Controllers;

use App\Utilities\LinkObject;
use App\Http\Requests\StoreStaffsRequest;
use App\Http\Requests\UpdateStaffsRequest;
use App\Http\Resources\Staff\StaffResource;
use App\Http\Resources\Staff\StaffCollection;
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

    public function show($staff) {
        return response()->json([
            'data'      => new StaffResource($this->StaffsRepository->show($staff)),
            'message'   => "Staff retrieved successfully",
            'errors'    => null,
        ]);
    }

    public function update(UpdateStaffsRequest $request,  $staff) {
        return response()->json([
            'data' => new StaffResource($this->StaffsRepository->update($request,  $staff)),
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
