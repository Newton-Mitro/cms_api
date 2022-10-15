<?php

namespace App\Repositories;

use App\Models\StaffSocialLink;
use App\Repositories\Interfaces\StaffSocialLinkRepositoryInterface;

class StaffSocialLinkRepository implements StaffSocialLinkRepositoryInterface {

    public function all() {
        return  StaffSocialLink::all();
    }

    public function store($request) {
        $staffSocialLink = new StaffSocialLink();
        $staffSocialLink->management_executive_id = $request->management_executive_id;
        $staffSocialLink->social_link_type_id = $request->social_link_type_id;
        $staffSocialLink->social_link = $request->social_link;
        $staffSocialLink->save();
        return $staffSocialLink->save();
    }

    public function show($staffSocialLink) {
        return StaffSocialLink::find($staffSocialLink);
    }

    public function destroy($staffSocialLink) {
        $staffSocialLink = StaffSocialLink::find($staffSocialLink);
        $staffSocialLink->delete();
    }
}
