<?php

namespace App\Repositories;



use App\Models\ExecutiveSocialLink;
use App\Http\Resources\ExecutiveSocialLink\ExecutiveSocialLinkResource;
use App\Repositories\Interfaces\ExecutiveSocialLinkRepositoryInterface;
use App\Http\Resources\ExecutiveSocialLink\ExecutiveSocialLinkCollection;

class ExecutiveSocialLinkRepository implements ExecutiveSocialLinkRepositoryInterface
{
    public function all()
    {
        return  ExecutiveSocialLinkCollection::collection(ExecutiveSocialLink::all());
    }
    public function store($request)
    {
        $executiveSocialLink = new ExecutiveSocialLink();

        $executiveSocialLink->management_executive_id = $request->management_executive_id;

        $executiveSocialLink->social_link_type_id = $request->social_link_type_id;

        $executiveSocialLink->social_link = $request->social_link;

        $executiveSocialLink->save();

        return response()->json(['message ' => "you are successfully insert Executive Social Link"]);
    }
    public function show($executiveSocialLink)
    {
        return new ExecutiveSocialLinkResource(ExecutiveSocialLink::find($executiveSocialLink));
    }
    public function destroy($executiveSocialLink)
    {
        $executiveSocialLink = ExecutiveSocialLink::find($executiveSocialLink);
        $executiveSocialLink->delete();
        return response()->json(['message ' => "you are successfully delate Executive Social Link"]);
    }
}
