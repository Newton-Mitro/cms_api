<?php

/**------------------------------------------------------------------------
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Implements applicant interface
 *------------------------------------------------------------------------**/

namespace App\Repositories;

use App\Models\ManagementExecutives;
use App\Repositories\Interfaces\ManagementExecutiveRepositoryInterface;
use App\Http\Resources\ManagementExecutives\ManagementExecutivesResource;
use App\Http\Resources\ManagementExecutives\ManagementExecutivesCollection;


class ManagementExecutiveRepository implements ManagementExecutiveRepositoryInterface
{
    public function all()
    {
        return ManagementExecutivesCollection::collection(ManagementExecutives::all());
    }

    public function store($request)
    {
        $managementExecutive = new ManagementExecutives();
        $managementExecutive->name = $request->Name;
        $managementExecutive->image = base64_decode($request->Image);
        $managementExecutive->designation = $request->Designation;
        $managementExecutive->content = $request->Content;
        $managementExecutive->save();
        return response()->json(['message ' => "you are successfully insert Management Executive"]);
    }
    public function show($managementExecutives)
    {
        return new ManagementExecutivesResource(ManagementExecutives::find($managementExecutives));
    }
    public function update($request,  $managementExecutives)
    {
        $managementExecutive = ManagementExecutives::find($managementExecutives);

        $managementExecutive->name = $request->Name;

        $managementExecutive->designation = $request->Designation;

        $managementExecutive->content = $request->Content;

        $managementExecutive->link_type_id = $request->Link_Type_Id;

        $managementExecutive->image = base64_decode($request->Image);

        $managementExecutive->update();

        return response()->json(['message ' => "you are successfully update Management Executive"]);
    }
    public function destroy($managementExecutives)
    {
        $managementExecutives = ManagementExecutives::find($managementExecutives);

        $managementExecutives->delete();

        return response()->json(['message ' => "you are successfully delate Management Executive"]);
    }
}
