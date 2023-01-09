<?php

namespace App\Http\Controllers;
use App\Http\Resources\PersonalIdResource;
use App\Http\Requests\StorePersonalIdRequest;
use App\Http\Requests\UpdatePersonalIdRequest;
use App\Models\PersonalId;
use Illuminate\Support\Facades\DB;

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


        return PersonalIdResource::collection(PersonalId::get());
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
    public function show($id)
    {


        return PersonalIdResource::collection(PersonalId::where('personal_id','=',$id )->get());
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
