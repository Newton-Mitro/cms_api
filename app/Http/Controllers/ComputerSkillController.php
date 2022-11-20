<?php

namespace App\Http\Controllers;

use App\Models\ComputerSkill;
use App\Http\Requests\StoreComputerSkillRequest;
use App\Http\Requests\UpdateComputerSkillRequest;

class ComputerSkillController extends Controller
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
     * @param  \App\Http\Requests\StoreComputerSkillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComputerSkillRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComputerSkill  $computerSkill
     * @return \Illuminate\Http\Response
     */
    public function show(ComputerSkill $computerSkill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComputerSkill  $computerSkill
     * @return \Illuminate\Http\Response
     */
    public function edit(ComputerSkill $computerSkill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComputerSkillRequest  $request
     * @param  \App\Models\ComputerSkill  $computerSkill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComputerSkillRequest $request, ComputerSkill $computerSkill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComputerSkill  $computerSkill
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComputerSkill $computerSkill)
    {
        //
    }
}
