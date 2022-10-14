<?php

namespace App\Http\Controllers;

use App\Models\ManagementExecutives;
use App\Http\Requests\StoreManagementExecutivesRequest;
use App\Http\Requests\UpdateManagementExecutivesRequest;
use App\Repositories\Interfaces\ManagementExecutiveRepositoryInterface;

class ManagementExecutivesController extends Controller
{
    private $ManagementExecutiveRepository;

    public function __construct(ManagementExecutiveRepositoryInterface $ManagementExecutiveRepository)
    {
        return $this->ManagementExecutiveRepository = $ManagementExecutiveRepository;
    }
    public function index()
    {
        return $this->ManagementExecutiveRepository->all();
    }
    public function create()
    {
    }
    public function store(StoreManagementExecutivesRequest $request)
    {
        return $this->ManagementExecutiveRepository->store($request);
    }

    public function show($managementExecutives)
    {
        return $this->ManagementExecutiveRepository->show($managementExecutives);
    }

    public function edit(ManagementExecutives $managementExecutives)
    {
        //
    }

    public function update(UpdateManagementExecutivesRequest $request,  $managementExecutives)
    {
        return $this->ManagementExecutiveRepository->update($request, $managementExecutives);
    }
    public function destroy($managementExecutives)
    {
        return $this->ManagementExecutiveRepository->destroy($managementExecutives);
    }
}
