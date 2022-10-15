<?php

namespace App\Http\Controllers;

use App\Models\StaffSocialLink;
use App\Http\Requests\StoreExecutiveSocialLinkRequest;
use App\Repositories\Interfaces\StaffSocialLinkRepositoryInterface;

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

    public function update(UpdateStaffSocialLinkRequest $request,StaffSocialLink $executiveSocialLink) {
        //
    }

    public function destroy($executiveSocialLink) {
        return  $this->ExecutiveSocialLinkRepository->destroy($executiveSocialLink);
    }
}
