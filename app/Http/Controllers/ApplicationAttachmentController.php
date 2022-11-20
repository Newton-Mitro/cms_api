<?php

namespace App\Http\Controllers;

use App\Models\ApplicationAttachment;
use App\Http\Requests\StoreApplicationAttachmentRequest;
use App\Http\Requests\UpdateApplicationAttachmentRequest;

class ApplicationAttachmentController extends Controller
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
     * @param  \App\Http\Requests\StoreApplicationAttachmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApplicationAttachmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApplicationAttachment  $applicationAttachment
     * @return \Illuminate\Http\Response
     */
    public function show(ApplicationAttachment $applicationAttachment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApplicationAttachment  $applicationAttachment
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplicationAttachment $applicationAttachment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApplicationAttachmentRequest  $request
     * @param  \App\Models\ApplicationAttachment  $applicationAttachment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApplicationAttachmentRequest $request, ApplicationAttachment $applicationAttachment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplicationAttachment  $applicationAttachment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplicationAttachment $applicationAttachment)
    {
        //
    }
}
