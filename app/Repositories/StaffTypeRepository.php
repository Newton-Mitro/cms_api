<?php

namespace App\Repositories;

use App\Models\StaffType;
use App\Repositories\Interfaces\StaffTypeRepositoryInterface;

/**------------------------------------------------------------------------
 * ?                                ABOUT
 * @author         :  Newton Mitro
 * @email          :  newtonmitro@gmail.com
 * @createdOn      :  20-10-2022
 * @updatedBy      :  Newton Mitro
 * @updatedAt      :  20-10-2022
 * @description    :  This repository will handle all database operation for Staff type data.
 *------------------------------------------------------------------------**/

class StaffTypeRepository implements StaffTypeRepositoryInterface {

    public function all() {
        return StaffType::all();
    }

    public function store($request) {
        $staffType = new StaffType();
        $staffType->staff_type_name = $request->staffTypeName;
        $staffType->save();
        return $staffType;
    }

    public function show($staffTypeId) {
        return StaffType::findOrFail($staffTypeId);
    }

    public function update($request,  $staffTypeId) {
        $staffType = StaffType::findOrFail($staffTypeId);
        $staffType->staff_type_name = $request->staffTypeName;
        $staffType->update();
        return  $staffType;
    }

    public function destroy($staffTypeId) {
        return StaffType::findOrFail($staffTypeId)->delete();
    }
}
