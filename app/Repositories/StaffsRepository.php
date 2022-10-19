<?php

namespace App\Repositories;

use App\Repositories\Interfaces\StaffsRepositoryInterface;
use App\Models\Staff;

/**------------------------------------------------------------------------
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @updatedAt      :  18-10-2022
 * @description    :  This repository will handle all database operation for Staffs data.
 *------------------------------------------------------------------------**/

class StaffsRepository implements StaffsRepositoryInterface {

    public function all() {
        return Staff::paginate(10);
    }

    public function store($request) {
        $staff = new Staff();
        $staff->name = $request->Name;
        $staff->image = base64_decode($request->Image, false);
        $staff->designation = $request->Designation;
        $staff->content = $request->Content;
        $staff->save();
        return $staff;
    }

    public function show($staffId) {
        $staff = Staff::find($staffId);
        return $staff;
    }

    public function update($request,  $staffId) {
        $staff = Staff::find($staff);
        $staff->name = $request->Name;
        $staff->designation = $request->Designation;
        $staff->content = $request->Content;
        $staff->link_type_id = $request->Link_Type_Id;
        $staff->image = base64_decode($request->Image, false);
        $staff->update();
        return  $staff;
    }

    public function destroy($staffId) {
        $staff = Staff::find($staffId);
        return $staff->delete();
    }
}
