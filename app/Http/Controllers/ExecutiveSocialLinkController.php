<?php

namespace App\Http\Controllers;

use App\Models\ExecutiveSocialLink;
use App\Http\Requests\StoreExecutiveSocialLinkRequest;
use App\Http\Requests\UpdateExecutiveSocialLinkRequest;
use App\Http\Resources\ExecutiveSocialLink\ExecutiveSocialLinkResource;
use App\Repositories\Interfaces\ExecutiveSocialLinkRepositoryInterface;
use App\Http\Resources\ExecutiveSocialLink\ExecutiveSocialLinkCollection;

class ExecutiveSocialLinkController extends Controller
{

    private $ExecutiveSocialLinkRepository;

    public function __construct(ExecutiveSocialLinkRepositoryInterface $ExecutiveSocialLinkRepository)
    {
        $this->ExecutiveSocialLinkRepository = $ExecutiveSocialLinkRepository;
    }

    public function index()
    {
        return  $this->ExecutiveSocialLinkRepository->all();
    }

    public function create()
    {
        //
    }


    public function store(StoreExecutiveSocialLinkRequest $request)
    {
        // return  $request;
        return  $this->ExecutiveSocialLinkRepository->store($request);
    }


    public function show($executiveSocialLink)
    {

        return  $this->ExecutiveSocialLinkRepository->show($executiveSocialLink);
    }


    public function edit(ExecutiveSocialLink $executiveSocialLink)
    {
        //
    }


    public function update(UpdateExecutiveSocialLinkRequest $request, ExecutiveSocialLink $executiveSocialLink)
    {
        //
    }


    public function destroy($executiveSocialLink)
    {

        return  $this->ExecutiveSocialLinkRepository->destroy($executiveSocialLink);
    }
}
