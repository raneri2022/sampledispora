<?php

namespace App\Http\Controllers;
use App\Http\Resources\PersonalIdResource;
use App\Http\Requests\StorePersonalIdRequest;
use App\Http\Requests\UpdatePersonalIdRequest;
use App\Models\PersonalId;

class PersonalIdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        
        return PersonalIdResource::collection(PersonalId::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePersonalIdRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonalIdRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonalId  $personalId
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalId $personalId)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonalIdRequest  $request
     * @param  \App\Models\PersonalId  $personalId
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonalIdRequest $request, PersonalId $personalId)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalId  $personalId
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalId $personalId)
    {
        //
    }
}
