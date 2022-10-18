<?php

namespace App\Http\Controllers;

use App\Utilities\LinkObject;
use App\Models\SocialMediaType;

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
                new LinkObject("Self", "Social Media Types", route('social-media-types.index'), "GET"),
                new LinkObject("Store", "New Social Media Type", route('social-media-types'), "POST"),
                new LinkObject("All", "Staffs", route('staffs.index'), "GET"),
            ]
        ]);
    }
}
