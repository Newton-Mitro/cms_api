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
 * @updatedAt      :  14-10-2022
 * @description    :  This repository will handle all database operation for Staffs data.
 *------------------------------------------------------------------------**/

class StaffsRepository implements StaffsRepositoryInterface
{
    public function all()
    {
        return Staff::all();
    }

    public function store($request)
    {
        $staff = new Staff();
        $staff->name = $request->Name;
        $staff->image = base64_decode($request->Image);
        $staff->designation = $request->Designation;
        $staff->content = $request->Content;
        $staff->save();
        return response()->json(['message ' => "you are successfully insert Management Executive"]);
    }

    public function show($staff)
    {
        return Staff::find($staff);
    }

    public function update($request,  $staff)
    {
        $staff = Staff::find($staff);
        $staff->name = $request->Name;
        $staff->designation = $request->Designation;
        $staff->content = $request->Content;
        $staff->link_type_id = $request->Link_Type_Id;
        $staff->image = base64_decode($request->Image);
        $staff->update();
        return response()->json(['message ' => "you are successfully update Management Executive"]);
    }

    public function destroy($staff)
    {
        $staff = Staff::find($staff);
        $staff->delete();
        return response()->json(['message ' => "you are successfully delate Management Executive"]);
    }
}
