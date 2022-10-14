<?php

namespace App\Http\Controllers;

use App\Models\ServiceCenter;
use App\Http\Requests\StoreServiceCenterRequest;
use App\Http\Requests\UpdateServiceCenterRequest;
use App\Http\Resources\ServiceCenter\ServiceCenterResource;
use App\Http\Resources\ServiceCenter\ServiceCenterCollection;
use App\Repositories\Interfaces\ServiceCenterRepositoryInterface;

class ServiceCenterController extends Controller
{

    private $ServiceCenterRepository;

    public function __construct(ServiceCenterRepositoryInterface $ServiceCenterRepository)
    {
        $this->ServiceCenterRepository = $ServiceCenterRepository;
    }

    public function index()
    {
        return $this->ServiceCenterRepository->all();
    }


    public function create()
    {
        //
    }


    public function store(StoreServiceCenterRequest $request)

    {
        return $this->ServiceCenterRepository->store($request);
    }


    public function show($serviceCenter)
    {
        return $this->ServiceCenterRepository->show($serviceCenter);
    }


    public function edit(ServiceCenter $serviceCenter)
    {
        //
    }


    public function update(UpdateServiceCenterRequest $request, $serviceCenter)
    {
        return $this->ServiceCenterRepository->update($request, $serviceCenter);
    }


    public function destroy($serviceCenter)
    {
        return $this->ServiceCenterRepository->destroy($serviceCenter);
    }
}
