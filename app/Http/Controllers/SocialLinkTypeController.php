<?php

namespace App\Http\Controllers;

use App\Models\SocialLinkType;
use App\Http\Requests\StoreSocialLinkTypeRequest;
use App\Http\Requests\UpdateSocialLinkTypeRequest;

class SocialLinkTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSocialLinkTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSocialLinkTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SocialLinkType  $socialLinkType
     * @return \Illuminate\Http\Response
     */
    public function show(SocialLinkType $socialLinkType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SocialLinkType  $socialLinkType
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialLinkType $socialLinkType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSocialLinkTypeRequest  $request
     * @param  \App\Models\SocialLinkType  $socialLinkType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSocialLinkTypeRequest $request, SocialLinkType $socialLinkType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SocialLinkType  $socialLinkType
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialLinkType $socialLinkType)
    {
        //
    }
}
