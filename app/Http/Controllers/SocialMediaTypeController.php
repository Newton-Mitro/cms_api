<?php

namespace App\Http\Controllers;

use App\Utilities\LinkObject;
use App\Models\SocialMediaType;
use App\Http\Controllers\Controller;

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

class SocialMediaTypeController extends Controller {

    public function index() {
        return response()->json([
            'data'      => SocialMediaType::all(),
            'message'   => "Social media types retrieved successfully",
            'errors'    => null,
            'links'     => [
                new LinkObject("self", "Social Media Types", route('social-media-types.index'), "GET"),
                new LinkObject("store", "New Social Media Type", route('social-media-types.store'), "POST"),
                new LinkObject("index", "Staffs", route('staffs.index'), "GET"),
            ]
        ]);
    }
}
