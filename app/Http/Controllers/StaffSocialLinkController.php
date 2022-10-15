<?php

namespace App\Http\Controllers;

use App\Models\StaffSocialLink;
use App\Http\Requests\StoreExecutiveSocialLinkRequest;
use App\Repositories\Interfaces\StaffSocialLinkRepositoryInterface;

/**========================================================================
 * ?                                ABOUT
 * @author         : Isrfil
 * @email          : israfil@cccul.com
 * @repo           : 
 * @createdOn      : 03-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 15-10-2022
 * @description    : Application stage seeder
 *========================================================================**/

class StaffSocialLinkController extends Controller {

    private $ExecutiveSocialLinkRepository;

    public function __construct(StaffSocialLinkRepositoryInterface $ExecutiveSocialLinkRepository) {
        $this->ExecutiveSocialLinkRepository = $ExecutiveSocialLinkRepository;
    }

    public function index() {
        return  $this->ExecutiveSocialLinkRepository->all();
    }

    public function store(StoreExecutiveSocialLinkRequest $request) {
        return  $this->ExecutiveSocialLinkRepository->store($request);
    }

    public function show($executiveSocialLink) {
        return  $this->ExecutiveSocialLinkRepository->show($executiveSocialLink);
    }

    public function update(UpdateStaffSocialLinkRequest $request, StaffSocialLink $executiveSocialLink) {
        //
    }

    public function destroy($executiveSocialLink) {
        return  $this->ExecutiveSocialLinkRepository->destroy($executiveSocialLink);
    }
}
