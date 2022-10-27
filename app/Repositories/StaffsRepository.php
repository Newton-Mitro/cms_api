<?php

namespace App\Repositories;

use App\Models\Staff;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Interfaces\StaffsRepositoryInterface;

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
        $filePath =  'public/images/post/' . date_timestamp_get(date_create()) . '.jpg';
        Storage::disk('local')->put($filePath, base64_decode($request->image, false));
        $staff->image = Storage::url($filePath);
        $staff->name = $request->Name;
        $staff->designation = $request->Designation;
        $staff->content = $request->Content;
        $staff->save();
        return $staff;
    }

    public function show($staffId) {
        return Staff::findOrFail($staffId);
    }

    public function update($request,  $staffId) {
        $staff = Staff::findOrFail($staffId);
        $filePath =  'public/images/post/' . date_timestamp_get(date_create()) . '.jpg';
        Storage::disk('local')->put($filePath, base64_decode($request->image, false));
        $staff->image = Storage::url($filePath);
        $staff->name = $request->Name;
        $staff->designation = $request->Designation;
        $staff->content = $request->Content;
        $staff->link_type_id = $request->Link_Type_Id;
        $staff->update();
        return  $staff;
    }

    public function destroy($staffId) {
        return Staff::findOrFail($staffId)->delete();
    }
}
